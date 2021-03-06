@extends('layouts.dashboard.app')
@section('title','Profile')
@push('css')
@endpush
@section('content')
    <div class="navigation login_page reg_p_b">
        <div class="logo">
            <a href="#">Ps<span>cribe</span></a>
        </div>

        <div class="btns">
            <span class="btn">Save As Template</span>
            <span class="btn">Save</span>
            <span class="btn">Print</span>
        </div>

        <nav class="nav">
            <ul>
                <li><a href="#"><i class="fas fa-bars"></i></a>


                    <ul>
                        <li><a href="#">Profile Page</a></li>
                        <li><a href="#">Edit Profile</a></li>
                    </ul>


                </li>
            </ul>



        </nav>
    </div>



    <div class="pres_html">
        <div class="row">
            <div class="pres_doc">
                <div class="pres_content">
                    <div class="part_1">
                        <div class="img">
                            <img src="{{asset($template_details->template_logo)}}" alt="" id="medical_logo" >
                            <input type="file" style="visibility: hidden;" class="input_medical_logo">
                        </div>

                        <div class="con">
                            <h2 class="medical_name_head" contenteditable>{{$template_details->template_name}}</h2>

                            <div class="part">
                                <div>
                                    <!-- <label for="">Location:</label> -->
                                    <div>
                                        <input type="text" value="{{$template_details->location}}" placeholder="Enter Location" disabled>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div>
                                    <div class="line">
                                        <!-- <label for="">Dr. Name</label> -->
                                        <input type="text" value="{{auth()->user()->name}}" placeholder="Enter Dr. Name">
                                    </div>
                                    <div class="line">
                                        <!-- <label for="">Specialist In</label> -->
                                        <input type="text" placeholder="Specialist in">
                                    </div>
                                    <div class="line">
                                        <!-- <label for="">Degrees</label> -->
                                        <div>
                                            <input type="text" placeholder="Degrees">
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="part_2">
                        <h3>Patient Details</h3>
                        <div class="line">
                            <div>
                                <label for="">Patient Phone No.</label>
                                <input type="number" name="" class="client_phone" id="" placeholder="This will use as patient-ID">
                            </div>
                            <div>
                                <label for="">Date:</label>
                                <input type="date" name="" class="client_phone" id="" placeholder="This will use as patient-ID">
                            </div>
                        </div>
                        <div class="line">
                            <div>
                                <label for="">Name:</label>
                                <input type="text" name="" class="client_name" id="" placeholder="Patient Name">
                            </div>
                            <div>
                                <label for="">Age:</label>
                                <input type="number" name="" id="" class="client_age" placeholder="Patient Age">
                            </div>
                        </div>
                        <div class="line">
                            <div>
                                <label for="">Father Name:</label>
                                <input type="text" name="" id="" class="client_father" placeholder="Father Name">
                            </div>
                            <div>
                                <label for="">Emergency Number:</label>
                                <input type="number" name="" id="" class="client_f_phone" placeholder="Emergency number">
                            </div>
                        </div>
                    </div>
                    <div class="part_3">
                        <div class="col">
                            <div>
                                <h3>Complain:</h3>
                                <textarea></textarea>
                            </div>

                            <div>
                                <h3>Medical Test:</h3>
                                <textarea></textarea>

                            </div>
                        </div>
                        <div class="col">
                            <h3>R<span>x</span></h3>


                            <div class="content">
                                <div class="part_one">
                                    <div class="tab_line">
                                        <h3 >
                                            <p >Tab.</p>
                                            <span class="title_btn tab">+</span>  </h3>
                                        <div class="text">

                                        </div>

                                    </div>
                                    <div class="cap_line">
                                        <h3 >
                                            <p > Capsule</p>
                                            <span class="title_btn cap">+</span>   </h3>
                                        <div class="text">
                                        </div>

                                    </div>
                                    <div class="sirup_line">
                                        <h3>
                                            <p >Sirup</p>
                                            <span class="title_btn sirup">+</span>   </h3>
                                        <div class="text">

                                        </div>

                                    </div>
                                    <div class="others_line">
                                        <h3>
                                            <p contenteditable>Others</p>
                                            <span class="title_btn others">+</span>   </h3>
                                        <div class="text">

                                        </div>

                                    </div>
                                </div>





                                <div class="remarks_box">
                                    <label for="" class="pb-1 mt-1" style="display: block;" >Remarks</label>
                                    <textarea placeholder="Remarks" ></textarea>
                                </div>

                                <div class="meet_box_container">

                                    <p> <span>Meet in</span>
                                        <span> <input type="number" placeholder="days" value="14"></span>
                                        <span>Days</span>
                                    </p>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="part_4">
                        <p>Visiting Hour 7am to 9pm</p>
                        <p>Call for Serial: 01783741728</p>
                    </div>
                    <p>Design and Developed by A2 Series</p>
                </div>
            </div>
            <div class="pres_edit">
                <h3>Press Edit Part Here</h3>


                <div class="patient_details_fill detail_fill">
                    <h4 class="detail_fill_title">Enter Patient details
                        <span>></span>
                    </h4>
                    <form action="" class="text">
                        <label for=""> Patient Phone</label>
                        <input type="number" placeholder="Patient Phone" class="client_phone">
                        <label for=""> Patient Name</label>
                        <input type="text" placeholder="Patient Name" class="client_name">
                        <label for=""> Patient Age</label>
                        <input type="number" placeholder="Patient age" class="client_age">
                        <label for=""> Father Name</label>
                        <input type="text" placeholder="Father Name" class="client_father">
                        <label for=""> Emergency Number</label>
                        <input type="number" placeholder="Emergency Number" class="client_f_phone">
                    </form>
                </div>

                <div class="tab_box detail_fill">
                    <h4 class="detail_fill_title">Enter Tablets <span class="ext_add_btn tablets">+</span>
                        <span>></span>
                    </h4>
                    <div class="text">
                        <div>
                            <label for="">Name</label>
                            <input type="text" placeholder=" name" class=" tab_name_enter">
                        </div>
                        <div>
                            <label for="">How Times To Eat</label>
                            <!-- <input type="number" class="others_time" placeholder="time" > -->
                            <div class="input_container" style="text-align: left;">
                                <div class="input">
                                    <input type="text" class="tab_time_enter" placeholder="x + 0 + x" >
                                    <div class="input_options">
                                        <ol>
                                            <li>1 + 0 + 0</li>
                                            <li>1 + 0 + 1</li>
                                            <li>1 + 1 + 0</li>
                                            <li>0 + 1 + 0</li>
                                            <li>0 + 1 + 1</li>
                                            <li>0 + 0 + 1</li>
                                            <li>1 + 1 + 1</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">How to Have</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type="text" placeholder="how to eat" class="tab_how_enter">
                                    <div class="input_options">
                                        <ol>
                                            <li>After Meal</li>
                                            <li>Before Meal</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="">Days to Eat</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type= "text" placeholder="days to Eat" class="tab_days_to_eat">
                                    <div class="input_options">
                                        <ol>
                                            <li>7 Days</li>
                                            <li>14 Days</li>
                                            <li>21 Days</li>
                                            <li>30 Days</li>
                                            <li>Continue</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <span class="btn tab_add_btn">+Add a New One</span>

                    </div>
                </div>

                <div class="tab_box detail_fill">
                    <h4 class="detail_fill_title">Enter Capsule <span class="ext_add_btn capsule">+</span>
                        <span>></span>
                    </h4>
                    <div class="text">
                        <div>
                            <label for="">Name</label>
                            <input type="text" placeholder=" name" class="cap_name_enter">
                        </div>
                        <div>
                            <label for="">How Times To Eat</label>
                            <!-- <input type="number" class="others_time" placeholder="time" > -->
                            <div class="input_container" style="text-align: left;">
                                <div class="input">
                                    <input type="text" class="cap_time_enter" placeholder="x + 0 + x" >
                                    <div class="input_options">
                                        <ol>
                                            <li>1 + 0 + 0</li>
                                            <li>1 + 0 + 1</li>
                                            <li>1 + 1 + 0</li>
                                            <li>0 + 1 + 0</li>
                                            <li>0 + 1 + 1</li>
                                            <li>0 + 0 + 1</li>
                                            <li>1 + 1 + 1</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">How to Have</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type="text" placeholder="how to eat" class="cap_how_enter">
                                    <div class="input_options">
                                        <ol>
                                            <li>After Meal</li>
                                            <li>Before Meal</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="">Days to Eat</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type= "text" placeholder="days to Eat" class="cap_days_to_eat">
                                    <div class="input_options">
                                        <ol>
                                            <li>7 Days</li>
                                            <li>14 Days</li>
                                            <li>21 Days</li>
                                            <li>30 Days</li>
                                            <li>Continue</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <span class="btn cap_add_btn">+Add a New One</span>

                    </div>
                </div>

                <div class="tab_box detail_fill ">
                    <h4 class="detail_fill_title">Enter Sirups <span class="ext_add_btn sirups">+</span>
                        <span>></span>
                    </h4>
                    <div class="text">
                        <div>
                            <label for="">Name</label>
                            <input type="text" placeholder=" name" class="sirup_name">
                        </div>
                        <div>
                            <label for="">How Times To Eat</label>
                            <!-- <input type="number" class="others_time" placeholder="time" > -->
                            <div class="input_container" style="text-align: left;">
                                <div class="input">
                                    <input type="text" class="sirup_time" placeholder="x + 0 + x" >
                                    <div class="input_options">
                                        <ol>
                                            <li>1 + 0 + 0</li>
                                            <li>1 + 0 + 1</li>
                                            <li>1 + 1 + 0</li>
                                            <li>0 + 1 + 0</li>
                                            <li>0 + 1 + 1</li>
                                            <li>0 + 0 + 1</li>
                                            <li>1 + 1 + 1</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">How to Have</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type="text" placeholder="how to eat" class="sirup_how">
                                    <div class="input_options">
                                        <ol>
                                            <li>After Meal</li>
                                            <li>Before Meal</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="">Days to Eat</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type= "text" placeholder="days to Eat" class="sirup_days_to_eat">
                                    <div class="input_options">
                                        <ol>
                                            <li>7 Days</li>
                                            <li>14 Days</li>
                                            <li>21 Days</li>
                                            <li>30 Days</li>
                                            <li>Continue</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <span class="btn sirup_add_btn">+Add a New One</span>

                    </div>
                </div>
                <div class="tab_box detail_fill ">
                    <h4 class="detail_fill_title">Enter Others <span class="ext_add_btn others">+</span>
                        <span>></span>
                    </h4>
                    <div class="text">
                        <div>
                            <label for="">Name</label>
                            <input type="text" placeholder=" name" class="others_name">
                        </div>
                        <div>
                            <label for="">How Times To Eat</label>
                            <!-- <input type="number" class="others_time" placeholder="time" > -->
                            <div class="input_container" style="text-align: left;">
                                <div class="input">
                                    <input type="text" class="others_time" placeholder="x + 0 + x" >
                                    <div class="input_options">
                                        <ol>
                                            <li>1 + 0 + 0</li>
                                            <li>1 + 0 + 1</li>
                                            <li>1 + 1 + 0</li>
                                            <li>0 + 1 + 0</li>
                                            <li>0 + 1 + 1</li>
                                            <li>0 + 0 + 1</li>
                                            <li>1 + 1 + 1</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">How to Have</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type="text" placeholder="how to eat" class="others_how ">
                                    <div class="input_options">
                                        <ol>
                                            <li>After Meal</li>
                                            <li>Before Meal</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="">Days to Eat</label>
                            <!-- <input type="text" placeholder="how to eat" class="others_how"> -->
                            <div class="input_container">
                                <div class="input">
                                    <input type= "text" placeholder="days to Eat" class="others_days_to_eat">
                                    <div class="input_options">
                                        <ol>
                                            <li>7 Days</li>
                                            <li>14 Days</li>
                                            <li>21 Days</li>
                                            <li>30 Days</li>
                                            <li>Continue</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <span class="btn others_add_btn">+Add a New One</span>

                    </div>
                </div>



            </div>
        </div>


        <div class="new_page_pres">
            <div class="content">
                <ol>

                </ol>
            </div>
        </div>
    </div>

@endsection
@push('js')



@endpush
