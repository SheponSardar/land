@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Point of Sale </h3>
                <div>



                    @if(session()->has('message'))
                    <div class="row" style="padding: 20px;">
                        <span class="alert alert-warning">{{ session()->get('message') }}</span>
                    </div>
                    @endif

                </div>
            </div>



        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="{{route('cart_post')}}" method="post" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">POS</span>
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Customer
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="CustomerName" name="name" required="required"
                                        class="form-control col-md-7 col-xs-12">

                                        @foreach ($user as $customer)


                                        <option value="{{$customer->fullname}}">{{$customer->fullname}}</option>

                                        @endforeach

                                    </select>
                                </div>

                            </div>





                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">District

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="designation" name="distric">

                                        <option value="Faridpur">Faridpur</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Sub-District

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="designation" name="subdistric">

                                        <option value="nagarkanda">nagarkanda</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Mouza
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="mouza"
                                        placeholder="Mouza" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Khatiyan No
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="khatiyan"
                                        placeholder="Khatiyan No" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Dag No
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="dag"
                                        placeholder="Dag No" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Yearly Tax
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="tax"
                                        placeholder="Yearly Tax" type="text">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">save</button>

                                </div>
                            </div>

                        </form>









                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
