@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Client Dashboard</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Client's Land</span>

                            <div>

                                @if(session()->has('message'))
                                <div class="row" style="padding: 20px;">
                                    <span class="alert alert-success">{{session()->get('message')}}</span>
                                </div>
                                @endif

                            </div>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th scope="col">name</th>
                                    <th scope="col">Distric</th>
                                    <th scope="col">Sub-Distric</th>
                                    <th scope="col">Mouza</th>
                                    <th scope="col">Khatiyan</th>
                                    <th scope="col">Dag</th>
                                    <th scope="col">Tax</th>
                                    <th scope="col">Action</th>





                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->distric }}</td>
                                    <td>{{ $customer->subdistric }}</td>
                                    <td>{{ $customer->mouza }}</td>
                                    <td>{{ $customer->khatiyan }}</td>
                                    <td>{{ $customer->dag }}</td>
                                    <td>{{ $customer->tax }}</td>


                                    <td class="">
                                        <a href="{{route('payment',$customer->id)}}"><i
                                                class="fa fa-pencil-square-o" style="font-size:24px"></i></a>

                                        <a onclick="return confirm('Are you sure want to delete this item?');" href="{{route('customer.delete',$customer->id)}}"><i class="fa fa-close"
                                                style="font-size:24px;color:red"></i></a>
                                    </td>



                                </tr>
                                @endforeach

                            </tbody>


                        </table>

                        {{-- payments --}}

                        <table class="table">
                            <span class="section">Client's payments</span>

                            <div>
                            </div>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th scope="col">payment ammount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">transaction ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($payments != null)
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->ammount }}</td>
                                    <td>{{ $payment->status }}</td>
                                    <td>{{ $payment->tran_id }}</td>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <p>No data found</p>
                                </tr>
                                @endif
                                

                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
