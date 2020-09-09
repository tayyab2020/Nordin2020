@extends("admin.admin_app")

@section("content")


    <div id="main">
        <div class="page-header">

            <div class="pull-right">
                <a href="{{URL::to('admin/tickets/addticket')}}" class="btn btn-primary">Add Ticket <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
            </div>

            <h2>Tickets</h2>
        </div>

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        <div class="panel panel-default panel-shadow">
            <div class="panel-body">

                <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Ticket Subject</th>
                        <th>Posted By</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th class="text-center width-100">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($tickets as $i => $ticket)
                        <tr class="data-row">

                            <input type="hidden" id="ticket_id" value="{{$ticket->id}}">
                            <input type="hidden" id="ticket_code" value="{{$ticket->ticket_id}}">
                            <input type="hidden" id="subject" value="{{$ticket->subject}}">
                            <input type="hidden" id="name" value="{{$ticket->name}}">
                            <input type="hidden" id="email" value="{{$ticket->email}}">
                            <input type="hidden" id="ticket_priority" value="{{$ticket->priority}}">
                            <input type="hidden" id="ticket_status" value="{{$ticket->status}}">
                            <input type="hidden" id="issue" value="{{$ticket->issue}}">

                            <td>
                                <a href="{{ url('admin/tickets/addticket/'.$ticket->id) }}">{{$ticket->ticket_id}}</a>
                            </td>

                            <td>
                                {{$ticket->subject}}
                            </td>

                            <td>{{$ticket->name}}</td>

                            <td>{{$ticket->email}}</td>


                            <?php $date = date_format($ticket->created_at,"d M Y h:i A"); ?>

                            <td>{{$date}}</td>

                            <td><div class="dropdown">

                                    @if(Auth::User()->usertype == "Admin")

                                        <button style="background: white;border: 1px solid #cccccc;border-radius: 50px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            @if($ticket->priority == 'High')  <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i> @elseif($ticket->priority == 'Medium') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-warning"></i> @else <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i>  @endif {{$ticket->priority}}
                                        </button>
                                        <div data-value="{{$ticket->priority}}" class="dropdown-menu menu-priority" aria-labelledby="dropdownMenuButton">
                                            <a data-id="{{$i}}" data-value="High" class="dropdown-item dropdown-priority" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                            <a data-id="{{$i}}" data-value="Medium" class="dropdown-item dropdown-priority" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                            <a data-id="{{$i}}" data-value="Low" class="dropdown-item dropdown-priority" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                        </div>

                                    @else

                                        <button style="background: white;border: 1px solid #cccccc;border-radius: 50px;" class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
                                            @if($ticket->priority == 'High')  <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i> @elseif($ticket->priority == 'Medium') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-warning"></i> @else <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i>  @endif {{$ticket->priority}}
                                        </button>

                                    @endif

                                </div></td>

                            <td><div class="dropdown">

                                    @if(Auth::User()->usertype == "Admin")

                                        <button style="background: white;border: 1px solid #cccccc;border-radius: 50px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            @if($ticket->status == 'Open')  <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-info"></i> @elseif($ticket->status == 'Reopened') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-info"></i> @elseif($ticket->status == 'On Hold') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i> @elseif($ticket->status == 'Closed') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i> @elseif($ticket->status == 'In Progress') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i> @else <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i>  @endif {{$ticket->status}}
                                        </button>

                                        <div data-value="{{$ticket->status}}" class="dropdown-menu menu-status" aria-labelledby="dropdownMenuButton">
                                            <a data-id="{{$i}}" data-value="Open" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                            <a data-id="{{$i}}" data-value="Reopened" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a>
                                            <a data-id="{{$i}}" data-value="On Hold" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a>
                                            <a data-id="{{$i}}" data-value="Closed" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                            <a data-id="{{$i}}" data-value="In Progress" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a>
                                            <a data-id="{{$i}}" data-value="Cancelled" class="dropdown-item dropdown-status" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                        </div>

                                        @else

                                        <button style="background: white;border: 1px solid #cccccc;border-radius: 50px;" class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
                                            @if($ticket->status == 'Open')  <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-info"></i> @elseif($ticket->status == 'Reopened') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-info"></i> @elseif($ticket->status == 'On Hold') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i> @elseif($ticket->status == 'Closed') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i> @elseif($ticket->status == 'In Progress') <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-success"></i> @else <i style="margin-right: 5px;" class="fa fa-dot-circle-o text-danger"></i>  @endif {{$ticket->status}}
                                        </button>

                                    @endif

                                </div></td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="{{ url('admin/tickets/addticket/'.$ticket->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                        <li><a href="{{ url('admin/tickets/delete/'.$ticket->id) }}"><i class="md md-delete"></i> Delete</a></li>
                                    </ul>
                                </div>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>

            <div id="myModal" class="modal fade" role="dialog">

                <div class="modal-dialog">

                {!! Form::open(array('url' => array('admin/tickets/update'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!}

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Status / Priority</h4>
                        </div>

                        <div class="modal-body">

                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="rec_name" id="rec_name">
                            <input type="hidden" name="type" id="type">
                            <input type="hidden" name="ticket_subject" id="ticket_subject">
                            <input type="hidden" name="ticket_issue" id="ticket_issue">
                            <input type="hidden" name="code" id="code">

                                <div class="form-group" style="display: inline-block;width: 100%;margin: 5px 0px;">
                                    <label style="margin-bottom: 5px;" for="" class="col-sm-3 control-label">Ticket Priority</label>
                                    <div class="col-sm-12">
                                        <input readonly type="text" placeholder="Ticket Priority" name="priority" id="priority"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group" style="display: inline-block;width: 100%;margin: 5px 0px;">
                                    <label style="margin-bottom: 5px;" for="" class="col-sm-3 control-label">Ticket Status</label>
                                    <div class="col-sm-12">
                                        <input readonly type="text" placeholder="Ticket Status" name="status" id="status" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group" style="display: inline-block;width: 100%;margin: 5px 0px;">
                                    <label style="margin-bottom: 5px;" for="" class="col-sm-3 control-label">Recipient Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" placeholder="Recipient Email" id="email_to" name="email_to" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group" style="display: inline-block;width: 100%;margin: 5px 0px;">
                                    <label style="margin-bottom: 5px;" for="" class="col-sm-3 control-label">Message</label>
                                    <div class="col-sm-12">
                                        <textarea rows="6" placeholder="Message" name="message" class="form-control"></textarea>
                                    </div>
                                </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" id="save" class="btn btn-success" data-dismiss="modal">Save</button>
                            <button type="button" id="send" class="btn btn-success"><i class="fa fa-send" style="margin-right: 5px;"></i>Send</button>
                        </div>

                    </div>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>

    </div>

    <style>

        .dropdown .dropdown-toggle::after
        {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent;

        }


        .dropdown-menu a{
            display: block;
            padding: 5px 10px;
            width: 100%;
            white-space: nowrap;
            text-decoration: none;
            color: #212529;
        }

        .dropdown-menu a i{ margin-right: 5px; }

        .text-danger
        {
            color: #f62d51 !important;
        }

        .text-warning
        {
            color: #ffbc34 !important;
        }

        .text-success
        {
            color: #55ce63 !important;
        }

        .text-info
        {
            color: #009efb !important;
        }


    </style>

    <script>

        $(document).ready(function(){ //Make script DOM ready

            $('#save').click(function() {

                $('#type').val(0);

                $('form').submit();

            });

            $('#send').click(function() {

                $('#type').val(1);

                $('form').submit();

            });

            $('.dropdown-priority').click(function() {

                var priority = $(this).data('value');

                var status = $(this).closest('tr').children('#ticket_status').val();

                var email = $(this).closest("tr").children('#email').val();

                var id = $(this).closest('tr').children("#ticket_id").val();

                var name = $(this).closest('tr').children("#name").val();

                var subject = $(this).closest('tr').children("#subject").val();

                var issue = $(this).closest('tr').children("#issue").val();

                var ticket_code = $(this).closest('tr').children("#ticket_code").val();


                $("#id").val(id);
                $("#rec_name").val(name);
                $("#email_to").val(email);
                $("#priority").val(priority);
                $("#status").val(status);
                $("#ticket_subject").val(subject);
                $("#ticket_issue").val(issue);
                $("#code").val(ticket_code);

                $('#myModal').modal("show"); //Open Modal


            });

            $('.dropdown-status').click(function() {

                var status = $(this).data('value');

                var priority = $(this).closest('tr').children('#ticket_priority').val();

                var email = $(this).closest("tr").children('#email').val();

                var id = $(this).closest('tr').children("#ticket_id").val();

                var name = $(this).closest('tr').children("#name").val();

                var subject = $(this).closest('tr').children("#subject").val();

                var issue = $(this).closest('tr').children("#issue").val();

                var ticket_code = $(this).closest('tr').children("#ticket_code").val();

                $("#id").val(id);
                $("#rec_name").val(name);
                $("#email_to").val(email);
                $("#priority").val(priority);
                $("#status").val(status);
                $("#ticket_subject").val(subject);
                $("#ticket_issue").val(issue);
                $("#code").val(ticket_code);

                $('#myModal').modal("show"); //Open Modal


            });

        });

    </script>


@endsection
