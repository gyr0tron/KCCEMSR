<h1 class="title text-center">Student Application Form To First/Second Year Degree Course In Engineering</h1>
@if (isset($errors) && count($errors) > 0)
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
{{--  <h2>Sample text lol</h2>  --}}
<form id="form-admission" method="post" class="grid-form" enctype="multipart/form-data">
  {{ csrf_field() }}
  <fieldset>
    <legend>Branch Preference</legend>
    <div data-row-span="3">
      <div data-field-span="1">
        <label>Preference 1</label>
        <select name="pre1">
          <option value="Computer Engineering" title="Computer Engineering" {{old('pre1')=='Computer Engineering'?"selected":""}}>Computer Engineering</option>
          <option value="Electronics & Telecommunication" title="Electronics & Telecommunication" {{old('pre1')=='Electronics & Telecommunication'?"selected":""}}>Electronics & Telecommunication</option>
          <option value="Information Technology" title="Information Technology" {{old('pre1')=='Information Technology'?"selected":""}}>Information Technology</option>
        </select>
      </div>

      <div data-field-span="1">
        <label>Preference 2</label>
        <select name="pre2">
          <option value="Computer Engineering" title="Computer Engineering" {{old('pre2')=='Computer Engineering'?"selected":""}}>Computer Engineering</option>
          <option value="Electronics & Telecommunication" title="Electronics & Telecommunication" {{old('pre2')=='Electronics & Telecommunication'?"selected":""}}>Electronics & Telecommunication</option>
          <option value="Information Technology" title="Information Technology" {{old('pre2')=='Information Technology'?"selected":""}}>Information Technology</option>
        </select>
      </div>

      <div data-field-span="1">
        <label>Preference 3</label>
        <select name="pre3">
          <option value="Computer Engineering" title="Computer Engineering" {{old('pre3')=='Computer Engineering'?"selected":""}}>Computer Engineering</option>
          <option value="Electronics & Telecommunication" title="Electronics & Telecommunication" {{old('pre3')=='Electronics & Telecommunication'?"selected":""}}>Electronics & Telecommunication</option>
          <option value="Information Technology" title="Information Technology" {{old('pre3')=='Information Technology'?"selected":""}}>Information Technology</option>
        </select>
      </div>
        {{--  <label>Branch Preference</label>
        <input type="text" autofocus="">  --}}
    </div>
  </fieldset>

  <br>
  <h3 style="color: red;">Note: * Required Fields</h3>
  <br>

  <fieldset>
    <legend>Personal Information</legend>
    <div data-row-span="9">
      <div data-field-span="1" style="height: 55px;">
        <h2 style="font-size: 22px;bottom: 22px;" class="form-center-relative">Full Name</h2>
      </div>
      <div data-field-span="2" style="height: 55px;">
        <label>Surname</label>
        <input style="text-transform: uppercase;" type="text" name="surname" value="{{old('surname')}}">
      </div>
      <div data-field-span="2" style="height: 55px;">
        <label>First Name</label>
        <input style="text-transform: uppercase;" type="text" name="firstname" value="{{old('firstname')}}">
      </div>
      <div data-field-span="2" style="height: 55px;">
        <label>Father's/Husband's Name</label>
        <input style="text-transform: uppercase;" type="text" name="fathername" value="{{old('fathername')}}">
      </div>
      <div data-field-span="2" style="height: 55px;">
        <label>Mother's Name</label>
        <input style="text-transform: uppercase;" type="text" name="mothername" value="{{old('surname')}}">
      </div>
    </div>

    <div data-row-span="3">
      <div data-field-span="1" style="height: 60px;">
        <label>Date of birth</label>
        <input type="text" placeholder="DD/MM/YYYY" name="dob" value="{{old('dob')}}">
      </div>
      <div data-field-span="1" style="height: 60px;" class="">
        <label>Blood Group</label>
        <select name="blood">
          @php
            $bloodGroups = ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"];
          @endphp
          @foreach ($bloodGroups as $key)
            <option value="{{$key}}" title="{{$key}}" {{old('blood')== $key?"selected":""}}>{{$key}}</option>
          @endforeach
        </select>
      </div>
      <div data-field-span="1" style="height: 60px;" class="">
        <label>Nationality</label>
        <select name="nationality">
          @php
          $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
          @endphp
          @foreach ($countries as $key)
            <option value="{{$key}}" title="{{$key}}" {{old('nationality')==$key?"selected":""}}>{{$key}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div data-row-span="3">
      {{--  <div data-field-span="2" data-field-error="Please enter a valid email address" style="height: 55px;">
        <label>E-mail</label>
        <input type="text">
      </div>  --}}
      <div data-field-span="1" style="height: 60px;">
        <label>Caste</label>
        <input type="text" name="caste" value="{{old('caste')}}">
      </div>
      <div data-field-span="1" style="height: 60px;">
        <label>Sex</label>
        <select name="sex">
          @php
            $sexs = ["Male", "Female", "Other", "Prefer not to say"];
          @endphp
          @foreach ($sexs as $key)
            <option value="{{$key}}" title="{{$key}}" {{old('sex')==$key?"selected":""}}>{{$key}}</option>
          @endforeach
        </select>
      </div>
      <div data-field-span="1" style="height: 60px;">
        <label>Category</label>
        <select name="category">
          @php
            $categories = ["Open", "SV", "OBC"];
          @endphp
          @foreach ($categories as $key)
            <option value="{{$key}}" title="{{$key}}" {{old('category')==$key?"selected":""}}>{{$key}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </fieldset>

  <br>

  <fieldset>
    <legend>Address for Correspondence</legend>
    <div data-row-span="2">
      <div data-field-span="1" style="height: 55px;">
        <label>Flat no. and bldg. name</label>
        <input type="text" name="caddress" value="{{old('caddress')}}">
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Road no./name</label>
        <input type="text" name="croad" value="{{old('croad')}}">
      </div>
    </div>
    <div data-row-span="4">
      <div data-field-span="3" style="height: 55px;">
        <label>Area and landmark</label>
        <input type="text" name="carea" value="{{old('carea')}}">
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>City</label>
        <input type="text" name="ccity" value="{{old('ccity')}}">
      </div>
    </div>
    <div data-row-span="4">
      <div data-field-span="1" style="height: 55px;">
        <label>Telephone Residence</label>
        <input type="tel" name="ctelephone" value="{{old('ctelephone')}}">
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Phone Number</label>
        <input type="tel" name="cphone" value="{{old('cphone')}}">
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Parent's Phone Number</label>
        <input type="tel" name="cparent" value="{{old('cparent')}}">
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Pin code</label>
        <input type="text" name="cpin" value="{{old('cpin')}}">
      </div>
    </div>
  </fieldset>

  <br>

  <fieldset>
    <legend>Permanent Address</legend>
    <div data-row-span="2">
      <div data-field-span="1" style="height: 55px;">
        <label>Flat no. and bldg. name</label>
        <input type="text" name="pflat" value={{old('pflat')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Road no./name</label>
        <input type="text" name="proad" value={{old('proad')}}>
      </div>
    </div>
    <div data-row-span="4">
      <div data-field-span="3" style="height: 55px;">
        <label>Area and landmark</label>
        <input type="text" name="parea" value={{old('parea')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>City</label>
        <input type="text" name="pcity" value={{old('pcity')}}>
      </div>
    </div>
    <div data-row-span="3">
      <div data-field-span="1" style="height: 55px;">
        <label>Telephone Residence</label>
        <input type="tel" name="ptel" value={{old('ptel')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Phone Number</label>
        <input type="tel" name="pphone" value={{old('pphone')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Pin code</label>
        <input type="number" name="ppin" value={{old('ppin')}}>
      </div>
    </div>
  </fieldset>

  <br>

  <fieldset>
    <legend>Parent's Information</legend>
    <div data-row-span="1">
      <div data-field-span="1" style="height: 55px;">
        <label>Office Address</label>
        <input type="text" name="parentOffice" value={{old('parentOffice')}}>
      </div>
    </div>
    <div data-row-span="2">
      <div data-field-span="1" style="height: 55px;">
        <label>Father's Occupation</label>
        <input type="text" name="parentOccupation" value={{old('parentOccupation')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Annual Income</label>
        <input type="number" name="parentIncome" value={{old('parentIncome')}}>
      </div>
    </div>
    <div data-row-span="3">
      <div data-field-span="1" style="height: 55px;">
        <label>Office Telephone</label>
        <input type="tel" name="parentOfficeNo1" value={{old('parentOfficeNo1')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Phone Number</label>
        <input type="tel" name="parentOfficeNo2" value={{old('parentOfficeNo2')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Pin code</label>
        <input type="number" name="parentOfficePin" value={{old('parentOfficePin')}}>
      </div>
    </div>
  </fieldset>

  <br><br>

  <fieldset>
    <legend>Details of HSC/CET Examination</legend>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative">Physics</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained (HSC)*</label>
        <input type="number" name="hscPhysics" value={{old('hscPhysics')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks (HSC)*</label>
        <input type="number" name="hscPhysicsMax" value={{old('hscPhysicsMax')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained(CET)*</label>
        <input type="number" name="cetPhysics" value={{old('cetPhysics')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks(CET)*</label>
        <input type="number" name="cetPhysicsMax" value={{old('cetPhysicsMax')}}>
      </div>
    </div>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative">Mathematics</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained (HSC)*</label>
        <input type="number" name="hscMaths" value={{old('hscMaths')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks (HSC)*</label>
        <input type="number" name="hscMathsMax" value={{old('hscMathsMax')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained(CET)*</label>
        <input type="number" name="cetMaths" value={{old('cetMaths')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks(CET)*</label>
        <input type="number" name="cetMathsMax" value={{old('cetMathsMax')}}>
      </div>
    </div>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative" style="font-size: 2.1rem;">Chem/Bio/BioTech/
          Tech.voc.</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained (HSC)*</label>
        <input type="number" name="hscChem" value={{old('hscChem')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks (HSC)*</label>
        <input type="number" name="hscChemMax" value={{old('hscChemMax')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained(CET)*</label>
        <input type="number" name="cetChem" value={{old('cetChem')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Maximum Marks(CET)*</label>
        <input type="number" name="cetChemMax" value={{old('cetChemMax')}}>
      </div>
    </div>
  </fieldset>

  <br><br>

  <fieldset>
    <legend>Marks Obtained in Various Exams</legend>
    <div data-row-span="5">
      <div data-field-span="2" style="height: 55px;">
        <label>Diploma Branch</label>
        <input type="text" name="diploma2Branch" value={{old('diploma2Branch')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Diploma Marks</label>
        <input type="number" name="diploma2Marks" value={{old('diploma2Marks')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Out of</label>
        <input type="number" name="diploma2Max" value={{old('diploma2Max')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Percentage</label>
        <input type="number" name="diploma2Percent" value={{old('diploma2Percent')}}>
      </div>
    </div>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative">SSC</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Year of Passing</label>
        <input type="number" name="sscYear" value={{old('sscYear')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Board</label>
        <input type="text" name="sscBoard" value={{old('sscBoard')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained</label>
        <input type="number" name="sscMarks" value={{old('sscMarks')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Total Marks</label>
        <input type="number" name="sscMax" value={{old('sscMax')}}>
      </div>
    </div>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative">HSC</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Year of Passing</label>
        <input type="number" name="hscYear" value={{old('hscYear')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Board</label>
        <input type="text"  name="hscBoard" value={{old('hscBoard')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained</label>
        <input type="number" name="hscMarks" value={{old('hscMarks')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Total Marks</label>
        <input type="number" name="hscMax" value={{old('hscMax')}}>
      </div>
    </div>
    <div data-row-span="5">
      <div data-field-span="1" style="height: 55px;">
        <h2 class="form-center-relative">Diploma</h2>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Year of Passing</label>
        <input type="number" name="diplomaYear" value={{old('diplomaYear')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Board</label>
        <input type="text" name="diplomaBoard" value={{old('diplomaBoard')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Marks Obtained</label>
        <input type="number" name="diplomaMarks" value={{old('diplomaMarks')}}>
      </div>
      <div data-field-span="1" style="height: 55px;">
        <label>Total Marks</label>
        <input type="number" name="diplomaMax" value={{old('diplomaMax')}}>
      </div>
    </div>
  </fieldset>

  <br><br>

   <fieldset>
    <legend>Photograph</legend>
    <div data-row-span="1">
      <div data-field-span="1" style="height: 55px;">
        <label>Upload your Photograph</label>
        <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
      </div>
    </div>
  </fieldset>
  <br><br>
  <h3>Undertaking</h3>
  <ol>
    <li>We have carefully read & understood the rules of admission to degree course in engineering.</li>
    <li>The information given in this application is true to the best of our knowledge & belief.</li>
    <li>We understand that the offer of admission will be given to the applicant depending on his / her inter-se-merit & availability of seat.</li>
    <li>The applicant hereby agrees to continue to any rules / acts & laws enforced by Govt. & the applicant hereby undertake that so lang as he / she is the student of this college, he / she will do nothing either inside or outside of the college campus which may result in disciplinary action against him / her under the rules, act and laws referred to.</li>
    <li>We fully understand that the principal of the college will have full liberty to expel that applicant from the college for any infringement of the rules of conduct & discipline of the college.</li>
  </ol>
  <br><br>
  <button type="submit" name="submit" value="proceed" class="btn btn-primary">Proceed</button>
</form>
