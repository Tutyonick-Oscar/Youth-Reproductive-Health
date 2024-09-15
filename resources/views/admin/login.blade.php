@extends('admin.layouts.header')
@section('title','Se connecter')
@section('content')
<div class="font-[sans-serif] bg-white">
    <div
      class="min-h-screen flex flex-col items-center justify-center py-6 px-4"
    >
      <div
        class="grid md:grid-cols-2 items-center justify-center gap-4 max-w-6xl w-full"
      >
        <div class="lg:h-[400px] md:h-[300px] max-md:mt-8">
          <img
            src="{{asset('images/Design stats-pana.png')}}"
            class="w-full h-full max-md:w-4/5 mx-auto block object-cover"
            alt="LOGIN DASHBOARD IMG"
          />
        </div>

        <div
          class="border border-accent1 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto"
        >
          <form class="space-y-4" id="login-form" method="POST">
            @csrf
            <div class="mb-8">
              <h3 class="text-bg text-xl font-semibold tracking-wide">
                Admin Login
              </h3>
            </div>

            <div>
              <label class="text-bg text-sm mb-2 block"
                >User name</label
              >
              <div class="relative flex items-center">
                <input
                  name="user_name"
                  type="text"
                  required
                  autofocus autocomplete="user_name" value="{{old('user_name')}}"
                  class="w-full text-sm text-bg border bg-white dash-border outline-none px-4 py-3 rounded-[4px]"
                  placeholder="Enter user name"
                />
                <i
                  class="bi bi-person text-[#073529] w-[18px] h-[18px] absolute right-4 cursor-pointer"
                ></i>
              </div>
              <div
                class="text-[#fe3a3a] text-[10px] mt-2 hidden"
                id="username-error"
              >
                Please enter a username.
              </div>
              @error('user_name')
                  <small class="text-[#fe3a3a] ">
                    {{$message}}
                  </small>
              @enderror
            </div>
            <div>
              <label class="text-bg text-sm mb-2 block"
                >Password</label
              >
              <div class="relative flex items-center">
                <input
                  name="password"
                  type="password"
                  required
                  autofocus autocomplete="password" value="{{old('password')}}"
                  class="w-full text-sm text-bg border dash-border outline-none px-4 py-3 rounded-[4px]"
                  placeholder="Enter password"
                />
                <i 
                  class="fa-solid fa-eye-slash text-accent1 text-xl absolute right-4 cursor-pointer"
                  id="password-toggle"
                ></i>
              </div>
              <div
                class="text-[#fe3a3a] text-[10px] mt-2 hidden"
                id="password-error"
              >
                Password must be at least 8 characters long, contain at least
                one uppercase letter, one lowercase letter, and one special
                character.
              </div>
              <div
                class="text-[#fe3a3a] text-[10px] mt-2 hidden"
                id="password-empty-error"
              >
                Please enter a password.
              </div>
              @error('password')
                <small class="text-[#fe3a3a] ">
                    {{$message}}
                </small>
              @enderror
            </div>
            <div class="flex flex-wrap items-center justify-between gap-4">
              <div class="flex items-center">
                <input
                  id="remember-me"
                  name="remember-me"
                  type="checkbox"
                  class="h-4 w-4 shrink-0 text-bg focus:ring-accent1 dash-border rounded"
                />
                <label
                  for="remember-me"
                  class="ml-3 block text-sm text-bg"
                  >Remember me</label
                >
              </div>

              <div class="text-sm">
                <a
                  href="#"
                  class="text-bg hover:underline"
                  >Forgot your password?</a
                >
              </div>
            </div>
            <div class="!mt-8">
              <button
                type="submit"
                class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-[4px] text-white bg-gradient-to-l from-bg to-secodary focus:outline-none"
                id="login-button"
              >
                Log in
              </button>
            </div>
            <div
              class="text-[[#42db80] text-[10px] hidden"
              id="success-message"
            >
              Login successful!
            </div>
            <div class="text-[#fe3a3a] text-[10px] hidden" id="error-message">
              Invalid username or password.
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    const passwordToggle = document.getElementById("password-toggle");
    const passwordInput = document.querySelector('input[name="password"]');

    passwordToggle.addEventListener("click", () => {
      passwordInput.type =
        passwordInput.type === "password" ? "text" : "password";
      passwordToggle.classList.toggle("bi-eye");
      passwordToggle.classList.toggle("bi-eye-slash");
    });

    const form = document.getElementById("login-form");
    const loginButton = document.getElementById("login-button");
    const passwordError = document.getElementById("password-error");
    const passwordEmptyError = document.getElementById(
      "password-empty-error"
    );
    const usernameError = document.getElementById("username-error");
    const successMessage = document.getElementById("success-message");
    const errorMessage = document.getElementById("error-message");

    loginButton.addEventListener("click", () => {
      const username = form.elements.username.value;
      const password = form.elements.password.value;

      if (username === "") {
        usernameError.classList.remove("hidden");
        return;
      } else {
        usernameError.classList.add("hidden");
      }

      if (password === "") {
        passwordEmptyError.classList.remove("hidden");
        return;
      } else {
        passwordEmptyError.classList.add("hidden");
      }

      const passwordRegex =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
      if (!passwordRegex.test(password)) {
        passwordError.classList.remove("hidden");
        return;
      } else {
        passwordError.classList.add("hidden");
      }

      if (username === "admin" && password === "Password123!") {
        successMessage.classList.remove("hidden");
        errorMessage.classList.add("hidden");
      } else {
        successMessage.classList.add("hidden");
        errorMessage.classList.remove("hidden");
      }
    });
  </script>
@endsection