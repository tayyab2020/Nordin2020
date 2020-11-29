<?php

namespace App\Http\Controllers\Admin;

use App\appointments;
use App\footer_headings;
use App\footer_pages;
use Auth;
use App\User;
use App\Properties;
use App\Enquire;
use App\Partners;
use App\Subscriber;
use App\Testimonials;
use App\faqs;
use Intervention\Image\Facades\Image;
use Session;
use App\tickets;
use App\tickets_images;
use Illuminate\Support\Str;
use Mail;

use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');

    }
    public function index()
    {
        return view('admin.pages.dashboard');

    }

    public function Details()
    {
        $details = appointments::orderBy('id', 'desc')->get();

        return view('admin.pages.appointments',compact('details'));
    }

    public function UpdateDetails(Request $request)
    {

        $post = appointments::where('id',$request->id)->first();

        $post->call_sign = $request->call_sign;
        $post->initials = $request->initials;
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->insertions = $request->insertions;
        $post->postal_code = $request->postal_code;
        $post->place = $request->place;
        $post->phone = $request->phone;
        $post->bsn = $request->bsn;
        $post->address = $request->address;
        $post->gender = $request->gender;
        $post->dob = $request->dob;
        $post->birthplace = $request->birthplace;
        $post->nationality = $request->nationality;
        $post->country = $request->country;
        $post->marital_status = $request->marital_status;
        $post->living_situation = $request->living_situation;
        $post->partner_first_name = $request->partner_first_name;
        $post->partner_last_name = $request->partner_last_name;
        $post->partner_insertions = $request->partner_insertions;
        $post->partner_call_sign = $request->partner_call_sign;
        $post->partner_gender = $request->partner_gender;
        $post->partner_dob = $request->partner_dob;
        $post->partner_birthplace = $request->partner_birthplace;
        $post->partner_nationality = $request->partner_nationality;
        $post->partner_country = $request->partner_country;
        $post->partner_bsn = $request->partner_bsn;
        $post->registration = $request->registration;
        $post->measure = $request->measure;
        $post->name_of_applicant = $request->name_of_applicant;
        $post->email = $request->email;
        $post->applicant_phone = $request->applicant_phone;
        $post->house = $request->house;
        $post->income = $request->income;
        $post->bank = $request->bank;
        $post->account_number = $request->account_number;
        $post->currently = $request->currently;
        $post->with_whom = $request->with_whom;
        $post->reason = $request->reason;
        $post->save();

        return redirect()->back()->with('flash_message', 'Your information has been updated successfully.');
    }

    public function DetailsById($id)
    {
        $details = appointments::where('id',$id)->first();

        return view('admin.pages.appointment',compact('details'));
    }

    public function EditDetails($id)
    {
        $details = appointments::where('id',$id)->first();

        return view('admin.pages.appointment',compact('details'));
    }

    public function DeleteDetails($id)
    {
        appointments::where('id',$id)->delete();

        return redirect()->back()->with('flash_message', 'Deleted successfully.');
    }

    public function faq()
    {
            $faqs = faqs::orderBy('id', 'desc')->get();

        return view('admin.pages.faqs',compact('faqs'));
    }

    public function addeditfaq(){

        if(Auth::User()->usertype!="Admin"){

            Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        return view('admin.pages.addeditfaq');
    }

    public function addnew(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();

        $rule=array(
            'question' => 'required',
            'answer' => 'required',
        );

        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        }


            if(!empty($inputs['id'])){

                $faq = faqs::findOrFail($inputs['id']);

            }else{

                $faq = new faqs;

            }


        $faq->question = $inputs['question'];
        $faq->answer = $inputs['answer'];

        $faq->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }


    }

    public function editfaq($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

            $faq = faqs::findOrFail($id);

        return view('admin.pages.addeditfaq',compact('faq'));

    }

    public function delete($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $faq = faqs::findOrFail($id);
        $faq->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function tickets()
    {
        if(Auth::User()->usertype == "Admin"){

            $tickets = tickets::leftjoin('users','users.id','=','tickets.user_id')->orderBy('tickets.id', 'desc')->select('tickets.*','users.name','users.email')->get();

        }
        else
        {
            $tickets = tickets::leftjoin('users','users.id','=','tickets.user_id')->where('tickets.user_id',Auth::User()->id)->orderBy('tickets.id', 'desc')->select('tickets.*','users.name','users.email')->get();
        }


        return view('admin.pages.tickets',compact('tickets'));
    }

    public function addeditticket(){

        return view('admin.pages.addeditticket');
    }

    public function editticket($id)
    {
        $ticket = tickets::findOrFail($id);

        $ticket_images = tickets_images::where('ticket_id',$id)->get();

        if(Auth::User()->usertype != "Admin")
        {
            if($ticket->user_id != Auth::User()->id)
            {
                \Session::flash('flash_message', 'Access denied!');

                return redirect('admin/dashboard');
            }
        }

        return view('admin.pages.addeditticket',compact('ticket','ticket_images'));

    }


    public function postTicket(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();

        $rule=array(
            'images.*' => 'mimes:jpg,jpeg,gif,png|max:2000',
        );

        $messages = [
            'images.*.mimes' => 'Ticket Images must be a file of type: jpg, jpeg, gif, png.',
            'images.*.max' => 'Ticket Images may not be greater than 2mb.',
        ];

        $validator = \Validator::make($data,$rule,$messages);


        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages())->withInput();
        }



        if(!empty($inputs['id'])){

            $ticket = tickets::findOrFail($inputs['id']);

        }else{

            $ticket = new tickets;

        }


        $user_id = Auth::user()->id;

        $ticket->user_id = $user_id;
        $ticket->subject = $inputs['ticket_subject'];
        $ticket->priority = $inputs['priority'];
        $ticket->status = 'Open';
        $ticket->issue = $inputs['ticket_issue'];

        $ticket->save();

        $id = sprintf("%02d", $ticket->id);

        $ticket_id = '#TK-'. $user_id .'-'.$id;

        $update = tickets::where('id',$id)->update(['ticket_id'=>$ticket_id]);

        $images = $request->file('images');

        $countfiles = count($_FILES['images']['name']);

        $imgs = [];


        if($images){

            $find = tickets_images::where('ticket_id',$ticket->id)->get();

            foreach ($find as $temp)
            {
                \File::delete(public_path() .'/upload/tickets/'.$temp->image);

                tickets_images::where('ticket_id',$ticket->id)->delete();
            }


            $tmpFilePath = 'upload/tickets/';

            for($i=0;$i<$countfiles;$i++) {

                $filename = $_FILES['images']['name'][$i];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $ext = strtolower($ext);

                $hardPath =  Str::slug('ticket-id', '-').'-'.md5(rand(0,99999));

                $img = Image::make($request->file('images')[$i]);

                $img->save($tmpFilePath.$hardPath. '.' . $ext);



                $imgs[$i] = $hardPath . "." . $ext;

            }

        }


        if(count($imgs) > 0)
        {
            foreach ($imgs as $key)
            {

                $ticket_images = new tickets_images;
                $ticket_images->ticket_id = $ticket->id;
                $ticket_images->image = $key;
                $ticket_images->save();

            }

        }

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            $sender_email = "info@zoekjehuisje.nl";
            $user_email = Auth::user()->email;

            Mail::send('emails.ticketAdminMail',
                array(
                    'parameters' => $request,
                    'ticket_id' => $ticket_id,
                    'user_email' => $user_email
                ),  function ($message) use($request,$sender_email) {
                    $message->from(getcong('site_email'),getcong('site_name'));
                    $message->to($sender_email)
                        ->subject($request->ticket_subject);
                });


            Mail::send('emails.ticketUserMail',
                array(
                    'parameters' => $request,
                    'ticket_id' => $ticket_id
                ),  function ($message) use($request,$user_email) {
                    $message->from(getcong('site_email'),getcong('site_name'));
                    $message->to($user_email)
                        ->subject($request->ticket_subject);
                });

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }


    }

    public function deleteTicket($id)
    {

        $ticket = tickets::findOrFail($id);

        $ticket->delete();

        $ticket_images = tickets_images::where('ticket_id',$id)->get();

        foreach ($ticket_images as $key)
        {

            $image = $key->image;

            \File::delete(public_path() .'/upload/tickets/'.$image);

        }

        $ticket_images = tickets_images::where('ticket_id',$id)->delete();


        \Session::flash('flash_message', 'Ticket Deleted');

        return redirect()->back();

    }

    public function update(Request $request)
    {

        $ticket = tickets::where('id',$request->id)->update(['priority'=>$request->priority, 'status'=>$request->status]);

        $sender_email = $request->email_to;

        if($request->type == 1)
        {
            Mail::send('emails.ticketMail',
                array(
                    'parameters' => $request,
                    'ticket_id' => $request->code
                ),  function ($message) use($request,$sender_email) {
                    $message->from(getcong('site_email'),getcong('site_name'));
                    $message->to($sender_email)
                        ->subject($request->ticket_subject);
                });
        }

        \Session::flash('flash_message', 'Ticket Updated');

        return redirect()->back();


    }

    public function SendMail(Request $request)
    {

        $user_type = Auth::user()->usertype;

        if($user_type == 'Admin')
        {
            $sender_email = $request->tk_email_to;
        }
        else
        {
            $sender_email = getcong('site_email');
        }


            Mail::send('emails.ticketMailQuery',
                array(
                    'parameters' => $request,
                    'ticket_id' => $request->tk_code
                ),  function ($message) use($request,$sender_email) {
                    $message->from(getcong('site_email'),getcong('site_name'));
                    $message->to($sender_email)
                        ->subject($request->tk_subject);
                });


        \Session::flash('flash_message', 'Task Successful');

        return redirect()->back();


    }

    public function footerHeadings()
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $footer_headings = footer_headings::all();

        return view('admin.pages.footer_headings',compact('footer_headings'));
    }

    public function addFooterHeading(){

        if(Auth::User()->usertype!="Admin"){

            Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        return view('admin.pages.add_footer_heading');
    }

    public function postFooterHeading(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();

        $rule=array(
            'heading' => 'required',
        );

        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        }


        if(!empty($inputs['id'])){

            $footer_heading = footer_headings::findOrFail($inputs['id']);

        }else{

            $footer_heading = new footer_headings;

        }


        $footer_heading->heading = $inputs['heading'];

        $footer_heading->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }

    }

    public function editFooterHeading($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $footer_heading = footer_headings::findOrFail($id);

        return view('admin.pages.add_footer_heading',compact('footer_heading'));

    }

    public function deleteFooterHeading($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $footer_pages = footer_pages::where('heading_id',$id)->delete();
        $footer_heading = footer_headings::where('id',$id)->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function footerPages()
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $allblogs = footer_pages::leftjoin('footer_headings','footer_headings.id','=','footer_pages.heading_id')->select('footer_pages.*','footer_headings.heading')->get();

        return view('admin.pages.blogs',compact('allblogs'));
    }

    public function addFooterPage(){

        if(Auth::User()->usertype!="Admin"){

            Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $headings = footer_headings::all();

        return view('admin.pages.addeditblog',compact('headings'));
    }


    public function postFooterPage(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();

        $rule=array(
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,gif,png'
        );

        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        }


        if(!empty($inputs['id'])){

            $blog = footer_pages::findOrFail($inputs['id']);

            //Slide image
            $t_user_image = $request->file('image');

            if($request->remove_image)
            {
                \File::delete(public_path() .'/upload/footer-pages/'.$blog->image);

                $blog->image = '';
            }

            if($t_user_image){


                \File::delete(public_path() .'/upload/footer-pages/'.$blog->image);

                $tmpFilePath = 'upload/footer-pages/';

                $filename = $_FILES['image']['name'];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                $image_file = $hardPath . '.' . $ext;

                $target_file = $tmpFilePath . $image_file;

                $img = Image::make($t_user_image);

                $img->save($target_file);

                $blog->image = $image_file;

            }


        }else{

            $blog = new footer_pages;

            //Slide image
            $t_user_image = $request->file('image');

            if($t_user_image){


                \File::delete(public_path() .'/upload/footer-pages/'.$blog->image);

                $tmpFilePath = 'upload/footer-pages/';

                $filename = $_FILES['image']['name'];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                $image_file = $hardPath . '.' . $ext;

                $target_file = $tmpFilePath . $image_file;

                $img = Image::make($t_user_image);

                $img->save($target_file);

                $blog->image = $image_file;

            }
            else
            {
                $blog->image = '';
            }

        }


        $blog->title = $inputs['title'];
        $blog->description = $inputs['description'];
        $blog->heading_id = $inputs['heading'];

        $blog->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }


    }


    public function editFooterPage($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $headings = footer_headings::all();

        $blog = footer_pages::findOrFail($id);

        return view('admin.pages.addeditblog',compact('blog','headings'));

    }

    public function deleteFooterPage($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $blog = footer_pages::findOrFail($id);

        \File::delete(public_path() .'/upload/footer-pages/'.$blog->image);


        $blog->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

}
