<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Multi Step Form | CodingNepal</title>
    <link rel="stylesheet" href="{{ asset('registerassets/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <header>Signup Form</header>
        <div class="progress-bar">
            <div class="step">
                <p>Name</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Contact</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Birth</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Submit</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form  method="post" action="{{ route('register') }}">
                @csrf
                <div class="page slide-page">
                    <div class="title">Basic Info:</div>
                    <div class="field">
                        <div class="label">Full Name</div>
                        <input  name="name"  id="name" placeholder="Full Name" type="text"
                        autofocus class="input-field">
                        <span class="error-message"></span>
                        {{-- @error('name')
                            <small style="color: red" role="alert">
                                {{ $message }}
                            </small>
                        @enderror --}}
                    </div>
                    <div class="field">
                        <div class="label">Email Address</div>
                        <input  name="email"  id="email" placeholder="Last Name" type="text"
                        required="" class="input-field">
                        <span class="error-message" style="color: red; display: none;">This field is required</span>
                    </div>
                    <div class="field">
                        <button type="button" class="firstNext next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Contact Info:</div>
                    <div class="field">
                        <div class="label">Phone Number</div>
                        <input  name="phone"  id="phone" placeholder="Phone Number" type="tel"
                        required="" class="input-field">
                        <span class="error-message" style="color: red; display: none;">This field is required</span>
                    </div>
                    <div class="field">
                        <div class="label">Address</div>
                        <input  name="address"  id="address" placeholder="Address" type="text"
                        required="" class="input-field">
                        <span class="error-message" style="color: red; display: none;">This field is required</span>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-1 prev">Previous</button>
                        <button type="button" class="next-1 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Date of Birth:</div>
                    <div class="field">
                        <div class="label">Date</div>
                        <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                        <span class="error-message" style="color: red; display: none;">This field is required</span>
                    </div>
                    <div class="field">
                        <div class="label">Gender</div>
                        <select name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        {{-- <span class="error-message" style="color: red; display: none;">This field is required</span> --}}
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-2 prev">Previous</button>
                        <button type="button" class="next-2 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Login Details:</div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input  name="password"  id="password" placeholder="password" type="password"
                        required="" class="input-field">
                        <span class="error-message" style="color: red; display: none;">This field is required</span>
                    </div>
                    <div class="field">
                        <div class="label">Confirm Password</div>
                        <input  name="password_confirmation"  id="confirm-password" placeholder="confirm-password" type="password"
                        required="" class="input-field">
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-3 prev">Previous</button>
                        <button type="submit" class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('registerassets/script.js') }}"></script>

</body>

</html>
