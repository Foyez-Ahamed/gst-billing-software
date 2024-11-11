@extends('layout.app')

@section('content')

<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
   <div class="col-12">
       <div class="page-title-box">
           <h4 class="page-title font-weight-bold text-uppercase"> Edit Party </h4>
       </div>
   </div>
</div>
<!-- end page title -->
<!-- Start Form  -->
<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">

           <!-- success message -->
            @if (session('status'))

            <div class="alert alert-success"> {{session('status') }} </div>
            
            @endif

            @if (count($errors))

            <div class="alert alert-danger"> 
               <strong> Validation Erros: Please check the following issue </strong>

               <ul>
                   @foreach ($errors->all() as $error )
                   <li> {{$error}} </li>
                   @endforeach
               </ul>
            </div>
            
            @endif

               <h4 class="header-title text-uppercase"> Basic Info</h4>
               <hr>
               <form class="needs-validation" method="POST" action="{{ route('updateParty', $party->id) }}">
                   @csrf
                   @method('PUT')
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom01">Type</label>
                               <select class="form-control border-bottom"
                                   id="validationCustom01" placeholder="Please select Type"
                                   name="party_type"

                                   >
                                   <option value="">Please Selected</option>
                                   <option value="Client" @if ( $party->party_type =="client") selected
                                   @endif
                                   >Client</option>
                                   <option value="Vendor" @if ( $party->party_type =="vendor") selected
                                   @endif
                                   >Vendor</option>
                                   <option value="Employee" @if ( $party->party_type =="employee") selected
                                   @endif
                                   >Employee</option>
                               </select>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom01">Full Name</label>
                               <input type="text" class="form-control border-bottom "
                                   id="validationCustom01" placeholder="Enter client's full name"
                                   name="full_name"
                                   value="{{ $party->full_name }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a Full name.
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom02">Phone/Mobile Number</label>
                               <input type="text" class="form-control border-bottom "
                                   id="validationCustom02" placeholder="Enter phone/mobile number"
                                   name="phone_no"
                                   value="{{ $party->phone_no }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a Number.
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group mb-3">
                               <label for="validationCustom03">Address</label>
                               <input type="text" class="form-control border-bottom "
                                   name="address"
                                   id="validationCustom02" placeholder="Enter Address" 
                                   value="{{ $party->address }}"
                                   >
                                   
                               <div class="invalid-feedback">
                                   Please provide a valid Address.
                               </div>
                           </div>
                       </div>
                   </div>


                   <h4 class="header-title text-uppercase">Bank Details</h4>
                   <hr>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom04">Account Holder Name</label>
                               <input type="text" class="form-control border-bottom "
                                   id="validationCustom04"
                                   name="account_holder_name" 
                                   placeholder="Enter Accoumt Holder name"
                                   value="{{ $party->account_holder_name }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a valid state.
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom05">Account Number</label>
                               <input type="text" class="form-control border-bottom "
                                  name="account_no"
                                   id="validationCustom05" placeholder="Enter Account Number"
                                  value="{{ $party->account_no }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a valid Code.
                               </div>
                           </div>
                       </div>


                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom02">Bank Name</label>
                               <input type="text" class="form-control border-bottom "
                                  name="bank_name"
                                   id="validationCustom02" placeholder="Enter Bank Name"
                                    value="{{ $party->bank_name }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a GSTIN No.
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom02">IFSC Code</label>
                               <input type="text" class="form-control border-bottom "
                                  name="ifsc_code"
                                   id="validationCustom02" placeholder="Enter IFSC Code"
                                   value="{{ $party->ifsc_code }}"
                                   >
                               <div class="invalid-feedback">
                                   Please provide a Email.
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom02">ZIP Code</label>
                               <input type="text" class="form-control border-bottom "
                                   id="validationCustom02" placeholder="Enter ZIP Code"
                                   
                                   >
                               <div class="invalid-feedback">
                                   Please provide a Zip.
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="form-group mb-3">
                               <label for="validationCustom02">State</label>
                               <input type="text" class="form-control border-bottom "
                                   id="validationCustom02" placeholder="Enter State" >
                               <div class="invalid-feedback">
                                   Please provide a State.
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12">
                           <label for="validationCustom02">Branch</label>
                           <input type="text" class="form-control border-bottom"
                               name="branch_address"
                               id="validationCustom02" placeholder="Enter Branch" 
                               value="{{ $party->branch_address }}"
                               >
                           <div class="invalid-feedback">
                               Please provide a Branch Name.
                           </div>
                       </div>
                   </div>
                   <br>

                   <button class="btn btn-primary" type="submit">Update</button>
                   <a href="{{ route('manageParty') }}" class="btn btn-secondary" type="reset">Cancel</a>
               </form>
           </div>
       </div>
   </div>
</div>

</div>

@endsection