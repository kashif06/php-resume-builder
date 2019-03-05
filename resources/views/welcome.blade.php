<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css" media="all">
      body{
        background-color: white;
      }
      .col-md-2{
        background-color: #1a237e;
        height:100%;
        width:100px;
        /*min-width:300px;*/
      }
      .col-md-10{
        margin-left: 150px;
        padding-left: 30px;
      }
      .function{
        color:#c62828;
        /*color:#b71c1c;*/
        /*color:#2196f3;*/
      }
      .class-color{
        color:#ffc107;
      }
      .tag{
        color:#bf360c;
      }
      .inbuilt{
        color:#7e57c2;
      }
      .white{
        color:white;
      }
      .end-of-line{
        color:#424242;
      }
      .output{
        color:#26a69a;
        /*color:#66bb6a;*/
      }
      .indent{
        padding:0 20px;
      }
      h4{
        font-size: 18px;
        margin-top:5px;
        margin-bottom:5px;
      }
      h3{
        font-size: 18px;
        margin-bottom: 5px;
        margin-top: 15px;
      }
      footer{
        background: black;
        color: white;
      }
      table td, table th{
		    border:none !important;
	     }
       table th{
         background-color: #1a237e;
       }
       .table>tbody>tr>td, .table>tbody>tr>th{
         padding:0;
       }
       .flex{
         display: flex;
       }
       .underline{
         text-decoration: underline;
       }
    </style>
</head>
<body style="margin:0;">
  <table class="table">
    <tr>
      <a href="{{url('/download-pdf')}}" class="btn btn-primary">CREATE PDF</a>
        <th width="150"></th>
        <td><h3><span class="inbuilt">class</span><span class="class-color"> Kashif {</span></h3>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> personalDetails <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4><span class="function">echo</span><span class="output"> "Name : Shaikh Kashif Jan Mohd \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Email : kashifshaikh440@gmail.com \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Phone : 9167772953 \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "DOB : 10-06-1994 \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Gender : Male \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Marital Status : Married \n"<span class="end-of-line">;</span></span></h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>

    <tr>
        <th></th>
        <td><div class="indent">
          <h3><span class="inbuilt">private function </span><span class="function"> education <span class="end-of-line">() {</span></span></h3>
            <div class="indent">
              <h4><span class="function">echo</span><span class="output"> "SSC from Mumbai Board - 2010 \n"<span class="end-of-line">;</span></span></h4>
              <h4><span class="function">echo</span><span class="output"> "HSC from Mumbai Board - 2012 \n"<span class="end-of-line">;</span></span></h4>
              <h4><span class="function">echo</span><span class="output"> "First year Engineering appeared from Mumbai University(M.H Saboo Siddik College of Engineering) - 2013 \n"<span class="end-of-line">;</span></span></h4>
              <h4><span class="function">echo</span><span class="output"> "BCA from Yashwantrao University - 2018 \n"<span class="end-of-line">;</span></span></h4>
            </div>
            <h3><span class="end-of-line">}</span></h3>
        </div></td>
    </tr>

    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> languagesKnown <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4><span class="function">echo</span><span class="output"> "English \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Hindi \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Marathi \n"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Urdu \n"<span class="end-of-line">;</span></span></h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> technicalSkills <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4><span class="function">echo</span><span class="output"> "Skills: PHP7, MYSQL, HTML5, CSS3, Jquery, Bootstrap"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Operating System: Linux"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "PHP Ecommerce: Prestashop"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Web Server: LAMP"<span class="end-of-line">;</span></span></h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>
    <!-- <tr>
        <th></th>
        <td style="padding:20px;">
          <br>
        </td>
    </tr> -->
    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> internship <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Company Name :</b>
                    Big Equation Technologies Pvt Ltd "
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Duration :</b>
                    2 months (4-April-17 Till 4-June-17)"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Version Control :</b>
                    GIT"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Project</b> :
                    Rainbow Hospitals"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Project Description</b> :
                    Rainbow hosiptal is a website for a hospital in Hyderabad. I got a hands on experience to work on backend and frontend at the same time with the team of 8 developers"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Backend Description</b> :
                    <ul>
                      <li>Made CRUD in laravel 5.4 using BackPack, a CRUD generator"<span class="end-of-line">;</span></li>
                    </ul>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"FrontEnd Description</b> :
                    <ul>
                      <li>Integrated APIs in frontend using Angular 4"<span class="end-of-line">;</span></li>
                    </ul>
                  </span>
                </h4>

              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> experience <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Company Name :</b>
                    Big Equation Technologies Pvt Ltd "
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Duration :</b>
                    1 year 7 months (5-June-17 Till 28-Feb-19)"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Projects Worked on</b>
                    <ol>
                      <li>) Indiefolio
                        <ul>
                          <li>Indiefolio is a company which provides services like hire designers, recruiters, etc to other companies.</li>
                          <li>Hands on Backend
                            <ul>
                              <li>Technology used : Yii2</li>
                              <li>Version control : GIT</li>
                              <li>Worked on implementing APIs in Yii2 framework</li>
                            </ul>
                          </li>
                          <li>Hands on FrontEnd
                            <ul>
                              <li>Technology used : Angular 5</li>
                              <li>Version Control : GIT</li>
                              <li>Worked on making custom pages as per client's request.</li>
                              <li>Implemented Google Analytics in the entire project</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <div class="page-break"></div>
                      <li>) Bsc-it Club
                        <ul>
                          <li>Inhouse app through which the studens can apply for internships, jobs and can give quiz as well.</li>
                          <li>Hands on Backend
                            <ul>
                              <li>Technology used : Laravel 5.5</li>
                              <li>Version control : GIT</li>
                              <li>Worked on implementing APIs in Yii2 framework</li>
                            </ul>
                          </li>
                          <li>Hands on FrontEnd
                            <ul>
                              <li>Technology used : HTML5,CSS3,Laravel 5.5</li>
                              <li>Worked on making custom pages as per client's request.</li>
                              <li>Implemented Google Analytics in the entire project</li>
                              <li>Version Control : GIT</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>Resume Builder</li>
                      <li>Chare Gear</li>
                    </ol>
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> experience <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Company Name :</b>
                    Big Equation Technologies Pvt Ltd "
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Duration :</b>
                    1 year 7 months (5-June-17 Till 28-Feb-19)"
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
                <h4>
                  <span class="function">echo </span>
                  <span class="output"><b>"Projects Worked on</b>
                    <ol>
                      <li>) Indiefolio
                        <ul>
                          <li>Indiefolio is a company which provides services like hire designers, recruiters, etc to other companies.</li>
                          <li>Hands on Backend
                            <ul>
                              <li>Technology used : Yii2</li>
                              <li>Version control : GIT</li>
                              <li>Worked on implementing APIs in Yii2 framework</li>
                            </ul>
                          </li>
                          <li>Hands on FrontEnd
                            <ul>
                              <li>Technology used : Angular 5</li>
                              <li>Version Control : GIT</li>
                              <li>Worked on making custom pages as per client's request.</li>
                              <li>Implemented Google Analytics in the entire project</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>) Bsc-it Club
                        <ul>
                          <li>Inhouse app through which the studens can apply for internships, jobs and can give quiz as well.</li>
                          <li>Hands on Backend
                            <ul>
                              <li>Technology used : Laravel 5.5</li>
                              <li>Version control : GIT</li>
                              <li>Worked on implementing APIs in Yii2 framework</li>
                            </ul>
                          </li>
                          <li>Hands on FrontEnd
                            <ul>
                              <li>Technology used : HTML5,CSS3,Laravel 5.5</li>
                              <li>Worked on making custom pages as per client's request.</li>
                              <li>Implemented Google Analytics in the entire project</li>
                              <li>Version Control : GIT</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>Resume Builder</li>
                      <li>Chare Gear</li>
                    </ol>
                    <span class="end-of-line">;</span>
                  </span>
                </h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> technicalSkills <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4><span class="function">echo</span><span class="output"> "Skills: PHP7, MYSQL, HTML5, CSS3, Jquery, Bootstrap"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Operating System: Linux"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "PHP Ecommerce: Prestashop"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Web Server: LAMP"<span class="end-of-line">;</span></span></h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
          <div class="indent">
            <h3><span class="inbuilt">private function </span><span class="function"> otherExperience <span class="end-of-line">() {</span></span></h3>
              <div class="indent">
                <h4><span class="function">echo</span><span class="output"> "English"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Hindi"<span class="end-of-line">;</span></span></h4>
                <h4><span class="function">echo</span><span class="output"> "Marathi"<span class="end-of-line">;</span></span></h4>
              </div>
              <h3><span class="end-of-line">}</span></h3>
          </div>
        </td>
    </tr>

</table>

    <!-- Scripts -->
</body>
<footer>
<h5>kashif.php</h5>
</footer>
</html>
