 <div class="content">
            <input type="file" style="visibility: hidden;" class="input_doctor_photo">
            <div class="row_1">
                <div>
                    <div class="img ">
                        <img class="reg_pro_img" src="{{ Storage::disk('public')->url('avatar/'.$user->image) }}" alt=""  >
                        <i class="fas fa-camera" style="cursor: pointer;"></i>
                    </div>
                    <div>
                        <div>
                            <h2>{{ $user->name }}</h2>
                            <span>{{ $user->city }}, {{ $user->country }}</span>
                        </div>
                        <label for="">Specialist In</label>
                        <input type="text" value="{{ $user->specialist_in }}" readonly placeholder="write here">
                    </div>
                </div>
                <div class="brif">
                    <div class="btns">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div class="edit_bio_box">
                        <div>
                            <i class="fas fa-times"></i>
                            <form action="{{ route('admin.update') }}" method="POST" class="name_address" enctype="multipart/form-data">
                                @csrf
                                <label for="name_edit"> Name </label>
                                <input type="text" name="name" id="name_edit" value="{{ Auth::user()->name }}">
                                <div class="country_line">
                                    <div>
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city"  value="{{ Auth::user()->city }}" required>
                                    </div>
                                    <div>
                                        <label for="country">Country</label>
                                        <input type="text" name="country" value="{{ Auth::user()->country }}" id="country" required>
                                    </div>
                                    <div>
                                        <label for="specialist_in">Specialist In</label>
                                        <input type="text" name="specialist_in" value="{{ Auth::user()->specialist_in }}" id="specialist_in" required>
                                    </div>
                                </div>
                                <h2>Bio</h2>
                                <textarea name="bio"  class="edit_bio" placeholder="Description here">{{ Auth::user()->bio }}</textarea>
                                <label for="name_edit"> Image </label>
                                <input type="file" name="image" id="image">
                                <button type="submit" class="btn edit_bio_box_save">save</button>
                            </form>
                            <h2 style="margin-top: 1rem">Degrees
                            </h2>
                            <ol>
                                <li>
                                    <form action="" id="DegreeForm" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name">Name</label>
                                                <input type="text" name="degree_name" id="degree_name" placeholder="Degree Name">
                                                @error('degree_name')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="Year">at</label>
                                                <input type="number" placeholder="Year" id="degree_year" name="degree_year">
                                            </div>
                                            <div class="col">
                                                <label for="From">From</label>
                                                <input type="text" name="degree_from" id="degree_from" placeholder="Board/University">
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <span id="add_span" class="btn deg_list_add_btn add-to-degree">+Add</span>
                                <button type="submit" class="btn edit_bio_box_save ">+Add</button>
                            </form>
                            <table>
                                <tr>
                                    <th>Degree</th>
                                    <th>Passin Year</th>
                                    <th>University</th>
                                </tr>
                                @if(session('cart'))
                                <form action="" id="session">
                                    @csrf
                                    @foreach(session('cart') as $id => $cart)
                                    <tr>
                                        <td >{{$cart['degree_name']}}<input type="hidden" name="degree_name[]" value="{{$cart['degree_name']}}">
                                    </td>
                                    <td>{{$cart['degree_year']}}<input type="hidden" name="degree_year[]" value="{{$cart['degree_year']}}"></td>
                                    <td>{{$cart['degree_from']}}<input type="hidden" name="degree_from[]" value="{{$cart['degree_from']}}"></td>
                                    <td><button value="{{$id}}" class="btn btn-danger btn-sm delete-session">delete</button></td>
                                </tr>
                                @endforeach
                                <button type="submit"  class="btn btn-danger click_btn">Save</button>
                                @endif
                            </table>
                        </form>
                        <button type="submit" value="clear" class="btn btn-danger clear_btn">Clear</button>
                    </div>
                </div>
                <h4>Bio</h4>
                <p>{{ $user->bio }}</p>
                <div class="degree">
                    <h3> Degrees</h3>
                    <div class="deg_detail">
                        <!-- <i class="fas fa-edit"></i> -->
                        <ol>
                            @foreach ($degrees as $degree)
                            <li>{{ $degree->degree_name }} from {{ $degree->degree_from }} in {{ $degree->degree_year  }}</li>
                            @endforeach
                            
                            
                            
                        </ol>
                        <div class="deg_add_box">
                            <i class="fas fa-times"></i>
                            <div>
                                <h2 style="margin-top: .5rem;">Add Your Degree</h2>
                                <ol>
                                    <li>
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name">Name</label>
                                                <input type="text" name="" id="Name" placeholder="Degree Name">
                                            </div>
                                            <div class="col">
                                                <label for="Year">at</label>
                                                <input type="number" placeholder="Year">
                                            </div>
                                            <div class="col">
                                                <label for="From">From</label>
                                                <input type="text" name="" id="From" placeholder="Board/University">
                                            </div>
                                        </div>
                                        <!-- <span class="btn"><i class="fas fa-times"></i></span> -->
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name">Name</label>
                                                <input type="text" name="" id="Name" placeholder="Degree Name">
                                            </div>
                                            <div class="col">
                                                <label for="Year">at</label>
                                                <input type="number" placeholder="Year">
                                            </div>
                                            <div class="col">
                                                <label for="From">From</label>
                                                <input type="text" name="" id="From" placeholder="Board/University">
                                            </div>
                                        </div>
                                        <!-- <span class="btn"><i class="fas fa-times"></i></span> -->
                                    </li>
                                </ol>
                                <div class="btns" style="display: flex;">
                                    <a class="btn add_btn" style="width: 100px; margin-bottom: 1rem; text-align: center; display: inline-block; margin-right: 1rem;">
                                        + Add
                                    </a>
                                    <a class="btn add_btn" style="width: 100px; margin-bottom: 1rem; text-align: center; display: inline-block;">
                                        Save
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>