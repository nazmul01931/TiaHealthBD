@extends('layout.app',['pageTitle' => 'Report List'])
@section('content')
@component('layout.inc.breadcrumb')
    @slot('title')
        Void 
    @endslot
@endcomponent
@include('elements.alert')
    <div class="row">
        <div class="col-lg-12 col-md-12">
           <div class="card card-outline-inverse">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"><i class="fa fa fa-user-o"> </i> Voided Report</h4>
                </div>
                <div class="card-body pt-0">
                    <table class="table table-bordered table-striped" id="example22">
                        <thead>
                            <tr class="">
                                <th width="80"> {{ __('messages.sl')}}</th>
                                <th>Date</th>
                                <th>Paitent</th> 
                                <th>#Id</th>
                                <th width="100">{{__('messages.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0; @endphp
                            @foreach($voidList as $row)
                                <tr>
                                    <td>{{ sprintf("%02s",++$i) }}</td>
                                    <td>{{ Pharma::dateFormat($row->date) }} </td> 
                                    <td>{{ $row->patient->patient_name }}</td>  
                                    <td>{{$row->bill->invoice}} - {{ $row->invoice }}</td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        <a class="btn waves-effect waves-light text-light btn-xs btn-primary" href="{{url('lab/laboratory/invoice/a4/'.$row->invoice)}}"><i class="mdi mdi-format-align-justify"></i> Print</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>  
                    </table>
                </div>
            </div>   
        </div>
    </div>
@include('elements.dataTableOne')
@endsection