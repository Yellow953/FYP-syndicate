@extends('layouts.app')

@section('content')

<div class="container-fluid p-0 m-0">
    <div class="contact-us-form" >
        <h1 class="text-center mb-3"><u>Apply for membership</u></h1>

        <form action="/admin/memberApplication/new" method="POST">
            @csrf
            <div class="row form-group">
                <div class="col-3">
                    <label for="firstname" style="display: block; text-align: right">First Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="middlename" style="display: block; text-align: right">Middle Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="lastname" style="display: block; text-align: right">Last Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="email" style="display: block; text-align: right">Email</label>
                </div>
                <div class="col-6">
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="nationality" style="display: block; text-align: right">Nationality</label>
                </div>
                <div class="col-6">
                    <input type="text" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="ssn" style="display: block; text-align: right">SSN</label>
                </div>
                <div class="col-6">
                    <input type="number" name="ssn" value="{{ old('ssn') }}" required autocomplete="ssn" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="district" style="display: block; text-align: right">District</label>
                </div>
                <div class="col-6">
                    <input type="text" name="district" value="{{ old('district') }}" required autocomplete="district" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="province" style="display: block; text-align: right">Province</label>
                </div>
                <div class="col-6">
                    <input type="text" name="province" value="{{ old('province') }}" required autocomplete="province" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="state" style="display: block; text-align: right">State</label>
                </div>
                <div class="col-6">
                    <input type="text" name="state" value="{{ old('state') }}" required autocomplete="state" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="dob" style="display: block; text-align: right">Date of Birth</label>
                </div>
                <div class="col-6">
                    <input type="date" name="dob" value="{{ old('dob') }}" required autocomplete="dob" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="gender" style="display: block; text-align: right">Gender</label>
                </div>
                <div class="col-6">
                    <select name="gender" class="form-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="status" style="display: block; text-align: right">Status</label>
                </div>
                <div class="col-6">
                    <select name="status" class="form-select">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="phone" style="display: block; text-align: right">Phone Number</label>
                </div>
                <div class="col-6">
                    <input type="number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="address" style="display: block; text-align: right">Address</label>
                </div>
                <div class="col-6">
                    <input type="text" name="address" value="{{ old('address') }}" required autocomplete="address" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="university" style="display: block; text-align: right">University</label>
                </div>
                <div class="col-6">
                    <input type="text" name="university" value="{{ old('university') }}" required autocomplete="university" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="address" style="display: block; text-align: right">Address</label>
                </div>
                <div class="col-6">
                    <input type="text" name="address" value="{{ old('address') }}" required autocomplete="address" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="degree" style="display: block; text-align: right">Degree</label>
                </div>
                <div class="col-6">
                    <select name="degree" class="form-select">
                        <option value="bachelor">Bachelor</option>
                        <option value="masters">Masters</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="major" style="display: block; text-align: right">Major</label>
                </div>
                <div class="col-6">
                    <input type="text" name="major" value="{{ old('major') }}" required autocomplete="major" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="graduation" style="display: block; text-align: right">Graduation Year</label>
                </div>
                <div class="col-6">
                    <input type="number" name="graduation" value="{{ old('graduation') }}" required autocomplete="graduation" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="employement" style="display: block; text-align: right">Employement</label>
                </div>
                <div class="col-6">
                    <input type="text" name="employement" value="{{ old('employement') }}" required autocomplete="employement" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="jobtype" style="display: block; text-align: right">Job Type</label>
                </div>
                <div class="col-6">
                    <input type="text" name="jobtype" value="{{ old('jobtype') }}" required autocomplete="jobtype" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="jobtitle" style="display: block; text-align: right">Job Title</label>
                </div>
                <div class="col-6">
                    <input type="text" name="jobtitle" value="{{ old('jobtitle') }}" required autocomplete="jobtitle" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="company" style="display: block; text-align: right">Current Company</label>
                </div>
                <div class="col-6">
                    <input type="text" name="company" value="{{ old('company') }}" required autocomplete="company" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="companyphone" style="display: block; text-align: right">Company Phone</label>
                </div>
                <div class="col-6">
                    <input type="number" name="companyphone" value="{{ old('companyphone') }}" required autocomplete="companyphone" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3">
                    <label for="companyaddress" style="display: block; text-align: right">Company Address</label>
                </div>
                <div class="col-6">
                    <input type="text" name="companyaddress" value="{{ old('companyaddress') }}" required autocomplete="companyaddress" class="form-control">
                </div>
            </div>
           <div class="row">
            <div class="col-3 offset-6">
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
           </div>
        </form>
           
           <br><hr><br>
           
           <h1 class="text-center mb-3"><u>Apply for Insurance</u></h1>

        <form action="/admin/insuranceApplication/new" method="POST">
            @csrf
            <div class="row form-group">
                <div class="col-3">
                    <label for="firstname" style="display: block; text-align: right">First Name</label>
                </div>
                <div class="col-6">
                    <input type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" class="form-control">
                </div>
            </div>
            
           <div class="row">
            <div class="col-3 offset-6">
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
           </div>
        </form>
    </div>
</div>


@endsection