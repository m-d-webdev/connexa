@extends('auth.masterAuth')
@section('title')
    Connexa | Register
@endsection
@section('content')
    <form class="cntFormRegister  wmia   br20 bg-l p20 r-p-c " {{ url('login') }}>
        @csrf
        <div style="height: 750px ;max-width: 600px;filter:drop-shadow(0 0  10px #ffffff3b)"
            class="c-p-s p20   mr20 br20  wkhmsin  bg-l w-1/2  ">
            <div class="r-c-c mb20">
                @include('components.logo')
                <h1 style="font-size: 25px;font-weight:900;" class="">
                    | Create account </h1>
            </div>
            <div class="wmia r-b-c" style="max-width: 560px">
                <div class="LabelInpInfo wkhmsin ">
                    <input type="text" id="first-name" name="firstName" placeholder="">
                    <label for="first-name">First name</label>
                </div>

                <div class="LabelInpInfo ml10  wkhmsin">
                    <input type="text" id="last-name" name="lasttName" placeholder="">
                    <label for="last-name">Last name</label>
                </div>
            </div>
            <div class="c-s-s wmia mt10  " style="max-width: 560px; padding-left:30px;">
                <strong class="mb10">Gender</strong>
                <div class="wmia r-b-c cnt_inp_Gender">
                    <input type="radio" id="gender-mal" name="gender">
                    <label for="gender-mal" class="psr r-c-c br5 pr20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr10" viewBox="0 -960 960 960" width="24px"
                            fill="#000000">
                            <path
                                d="M800-800v240h-80v-103L561-505q19 28 29 59.5t10 65.5q0 92-64 156t-156 64q-92 0-156-64t-64-156q0-92 64-156t156-64q33 0 65 9.5t59 29.5l159-159H560v-80h240ZM380-520q-58 0-99 41t-41 99q0 58 41 99t99 41q58 0 99-41t41-99q0-58-41-99t-99-41Z" />
                        </svg>
                        Male
                        <svg xmlns="http://www.w3.org/2000/svg" class="pop iconeDoneSelect" viewBox="0 -960 960 960"
                            width="24px" fill="#000000">
                            <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                        </svg>
                    </label>

                    <input type="radio" id="gender-fim" name="gender">
                    <label for="gender-fim" class="psr r-c-c br5 pr20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr10" viewBox="0 -960 960 960" width="24px"
                            fill="#000000">
                            <path
                                d="M440-120v-80h-80v-80h80v-84q-79-14-129.5-75.5T260-582q0-91 64.5-154.5T480-800q91 0 155.5 63.5T700-582q0 81-50.5 142.5T520-364v84h80v80h-80v80h-80Zm40-320q58 0 99-41t41-99q0-58-41-99t-99-41q-58 0-99 41t-41 99q0 58 41 99t99 41Z" />
                        </svg>
                        Female
                        <svg xmlns="http://www.w3.org/2000/svg" class="pop iconeDoneSelect" viewBox="0 -960 960 960"
                            width="24px" fill="#000000">
                            <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                        </svg>
                    </label>

                    <input type="radio" id="gender-not" name="gender">
                    <label for="gender-not" class="psr r-c-c br5 pr20">
                        <strong class="mr10">
                            Prefer not to say
                        </strong>
                        <svg xmlns="http://www.w3.org/2000/svg" class="pop iconeDoneSelect" viewBox="0 -960 960 960"
                            width="24px" fill="#000000">
                            <path d="M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" />
                        </svg>
                    </label>
                </div>
            </div>
            <div class="c-s-s wmia  mt10" style="max-width: 560px; padding-left:30px;">
                <strong class="mb10">Date of birth</strong>
                <div class="wmia r-b-c ">
                    <div class="r-s-c psr cnt_inp_BirthDay">
                        <input type="text" id="day" name="day" placeholder="">
                        <label for="day">Day</label>
                    </div>
                    <div class="r-s-c psr cnt_inp_BirthDay">
                        <input type="text" id="Month" name="month" placeholder="">
                        <label for="Month">Month</label>
                    </div>
                    <div class="r-s-c psr cnt_inp_BirthDay">
                        <input type="text" id="year" name="year" placeholder="">
                        <label for="year">year</label>
                    </div>
                </div>
            </div>
            <div class="LabelInpInfo">
                <input type="email" id="email" name="email" placeholder="">
                <label for="email" id="">E-mail</label>
                <svg version="1.1" viewBox="0 0 2048 2048" class="iconeLabelInpinfo" xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(214,255)"
                        d="m0 0h1209l33 2 24 3 22 5 19 7 23 13 13 10 9 7 6 5 9 11 10 14 9 15 7 16 5 15 5 22 3 26 1 25v404l9 1 43 8 35 8 27 9 28 11 26 12 15 8 27 16 24 16 18 14 14 12 13 12 15 14 15 16 9 11 13 16 13 19 10 15 15 26 18 37 10 26 11 33 10 38 7 42h2v111h-2l-1 5 3 1v24h-2v-9l-2-2v-3h-3l-1 8-6 18-8 16-11 17-8 11-14 15-13 11-14 10-14 8-21 8-24 6-29 4h-24l-22-4-19-6-16-8-15-9-14-11-16-16-5-6-8-7-4-1-7 4-14 15-15 11-15 10-14 8-26 10-18 5-15 3-17 2h-39l-25-4-19-5-21-9-17-10-11-7-19-14-8-7-15-15-12-16-13-20-9-16-8-16-7-19-4-16-3-24v-23l3-26 4-18 7-21 8-16 12-20 11-16 8-11 10-11 5-6 10-8 13-10 11-7 17-11 15-8 18-7 21-5 16-2h37l27 4 23 5 17 6 21 11 10 7 15 9 16 11 6-1 9-6 4-3h17l9 4 11 8 6 5 7 11 2 7 1 11 1 154 2 20 4 18 7 16 9 13 10 10 13 8 15 6 14 3 16 1 19-4 18-8 12-8 12-12 8-12 5-16 3-15 1-36-2-40-4-38-5-26-7-25-12-34-16-33-16-28-10-14-9-12-12-14-9-10-7-8-14-14-10-8-13-11-14-10-21-14-17-10-29-15-33-13-31-9-23-5-22-3-23-2h-50l-31 3-26 5-26 7-33 11-24 11-25 13-16 10-18 13-15 12-11 9-16 15-15 15-7 9h-2l-2 4-11 14-10 14-8 13-9 15-17 33-10 26-8 25-7 27-4 21-3 26-1 15v24l3 37 4 26 6 25 12 39 11 26 14 27 14 23 26 34 10 11 7 8 6 7 8 7 10 9 14 11 11 9 19 13 25 14 20 11 16 7 25 9 19 6 19 5 15 3 49 5h30l50-6 32-5 20-6 37-15 33-13 16-5 10-2h14l14 7 9 9 6 11 2 7 1 10-2 9-6 10-8 10-11 8-21 11-25 11-36 13-23 7-40 9-25 4-34 3h-52l-35-3-27-4-39-10-29-9-32-13-33-16-24-14-27-18-18-14-14-12-8-7-8-8-8-7-9-9v-2h-2l-7-8-8-9-9-11-10-13-14-19-13-21-8-13-8-16-10-21-12-30-7-21-4-10-4-2h-949l-28-3-28-7-16-6-21-11-12-9-13-10-16-16-10-14-11-19-11-23-5-13v-2l-3-1 1-3 2 1-3-8v-905h2l1-5 4-13 6-17 7-16 8-15 14-19 15-16 17-13 15-9 17-8 15-5 17-4 21-3 26-2zm220 85-116 1h-151l3 5 9 8 9 7 11 9 14 12 22 18 14 11 25 20 22 18 13 11 14 11 13 11 11 9 17 14 10 8 12 10 11 9 13 11 11 9 10 8 12 10 14 11 17 14 15 13 10 8 11 9 16 13 11 9 14 11 13 11 11 9 13 11 14 11 14 12 14 11 17 14 26 22 10 8 16 13 11 9 16 13 14 12 22 18 16 11 12 5 16 4 12-2 18-6 13-7 14-10 11-9 10-8 14-12 9-7 16-13 11-9 14-11 14-12 11-9 15-13 9-7 13-11 13-10 13-11 10-8 12-10 11-9 13-11 14-11 11-9 17-14 14-11 10-9 10-8 12-10 10-8 16-13 17-14 11-9 17-14 13-11 16-13 12-10 10-8 12-10 11-9 17-14 14-12 9-7 17-14 14-11 13-11 10-8 16-13 10-8 13-11 6-7zm-344 53-2 9-1 13-1 31-1 206v612l2 28 4 17 6 14 8 11 11 11 14 9 11 5 12 3 21 3 25 1 262 1h175l189-1 264-1 20-1v-53l5-50 4-25 6-27 8-27 9-27 8-18 12-26 7-12 8-16 16-25 10-13 18-24 9-11 1-3h2l7-8 15-15 8-7 14-13 10-8 17-13 26-17 25-15 21-11 23-10 32-12 24-7 22-5 33-6 19-3 6-3 1-2v-51l-1-389-1-13-2-4-6 2-10 7-13 10-14 11-17 14-33 27-9 8-11 8-8 7-12 9-10 9-14 11-9 8-9 7-14 12-11 9-18 14-11 9-26 22-14 11-11 10-13 10-16 13-11 9-14 11-10 9-10 8-14 12-17 14-13 10-13 11-14 11-10 9-8 6-11 10-13 10-16 13-11 9-14 11-10 9-14 11-10 9-14 11-10 9-12 9-14 12-13 10-10 9-8 6-10 7-11 7-15 8-27 9-24 5h-25l-18-3-20-6-16-8-11-6-15-10-14-11-11-9-16-13-13-11-11-9-13-11-22-18-17-14-11-9-13-11-14-11-10-9-9-7-16-13-11-9-16-13-17-14-13-11-14-11-13-11-14-11-14-12-14-11-13-11-22-18-16-13-11-9-16-13-11-9-14-12-10-8-12-10-14-11-11-9-17-14-11-9-14-12-11-9-17-14-14-11-16-13-11-9-13-11-10-8-14-12-11-7zm1473 803-23 4-20 8-15 10-11 9-10 10-13 17-9 17-7 22-3 19v21l3 19 6 18 10 19 9 12 12 13 9 8 14 10 17 8 17 5 20 3h17l20-3 16-5 16-7 13-8 13-10 9-9 11-15 8-14 5-12 4-16 2-14v-27l-4-20-5-16-8-16-7-11-11-13-8-7-15-11-16-8-17-6-21-4zm480 198 1 3z" />
                    <path transform="translate(2047,1236)" d="m0 0 1 4h-3v-3z" />
                    <path transform="translate(1737,1466)" d="m0 0" />
                    <path transform="translate(2046,1388)" d="m0 0" />
                    <path transform="translate(2047,1387)" d="m0 0" />
                    <path transform="translate(0,393)" d="m0 0" />
                </svg>
            </div>
            <div class="LabelInpInfo ">
                <input type="text" minlength="10" maxlength="14" id="phone" name="phone" placeholder="">
                <label for="phone">Phone number</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="iconeLabelInpinfo" viewBox="0 -960 960 960"
                    width="24px" fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>

            </div>
            <div class="LabelInpInfo ">
                <input type="text" id="password" name="password" placeholder="">
                <label for="password" id="">Create password</label>
                <svg version="1.1" viewBox="0 0 2048 2048" class="iconeLabelInpinfo"
                    xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(1e3 60)"
                        d="m0 0h46l39 3 42 6 28 6 35 10 26 9 24 10 29 14 25 13 21 13 19 13 19 14 14 11 11 9 16 15 12 11 9 9 7 8 12 13 9 11 12 15 10 14 18 27 15 26 18 36 12 29 14 41 7 26 7 36 4 28 2 28 1 24 1 57v197l20 2 28 5 24 8 17 8 16 10 16 13 12 11 12 14 10 15 8 16 6 13 6 20 3 18 2 30v756l-2 44-3 24-4 16-5 13-9 19-12 18-8 10-9 10-7 7-20 15-16 9-19 8-21 6-27 4-22 2-25 1h-1050l-30-2-25-4-17-5-16-7-16-9-17-13-12-11-8-8-13-17-7-11-8-14-8-20-5-17-3-17-2-25-1-62v-440l1-292 3-26 4-17 6-16 8-16 8-14 8-12 11-13 14-14 18-13 16-10 19-9 21-5 19-3 19-2h6v-240l1-31 3-36 5-32 9-41 7-25 12-33 12-28 12-25 13-24 12-20 17-25 21-28 9-10 7-8 7-7 7-8 4-4h2l2-4 8-8 8-7 7-7 22-18 16-12 30-20 32-19 32-16 25-11 28-10 30-9 30-7 41-6 31-3zm-8 121-32 3-29 5-25 6-36 12-24 10-19 9-23 13-11 7-16 11-12 9-16 13-8 7-10 9-17 17-7 8-9 10-9 11-9 12-15 23-11 18-8 15-10 21-14 36-10 35-6 25-4 32-1 15-1 34v236h841l1-1v-239l-1-33-3-28-5-31-8-30-11-33-12-28-10-20-10-18-14-22-14-19-11-13-9-11-29-29-10-8-12-10-19-14-17-11-24-14-17-9-23-10-26-10-34-10-29-6-21-3-29-2zm-403 782-97 1-25 1-14 2-8 3-10 8-6 8-5 11-3 16-1 25-1 123v641l2 21 4 13 5 9 5 6 13 8 12 4 20 3 33 1h1029l25-1 13-2 12-4 12-7 9-9 5-11 3-12 1-9 1-145v-624l-1-31-3-12-8-16-7-9-11-7-15-3-16-1-67-1z" />
                    <path transform="translate(1007,1144)"
                        d="m0 0h29l26 3 17 4 20 8 16 8 14 9 13 10 13 12 9 10 12 17 10 18 10 25 5 18 3 19 1 18-2 28-5 24-4 12-10 22-9 14-8 11-9 10-7 8-15 13-14 10-14 8-22 9-1 111-1 27-2 13-4 9-6 10-8 10-9 6-12 5-16 3-18-2-13-4-9-5-10-9-6-8-5-11-3-12-2-19v-120l-9-6-16-8-16-10-13-11-8-7-15-15-10-13-11-18-9-19-7-20-4-18-2-17v-17l5-32 7-24 7-16 10-19 8-12 12-15 8-7 8-8 18-13 14-8 21-9 15-5 23-4zm10 121-13 2-12 5-11 7-7 8-7 16-3 14v14l4 16 9 17 5 5 10 7 10 4 11 3 8 1h11l12-3 14-7 9-7 5-6 7-14 3-12v-17l-4-17-6-12-11-12-14-8-12-3z" />
                </svg>
            </div>
            <div class="LabelInpInfo ">
                <input type="text" id="confirm-password" name="confirm-password" placeholder="">
                <label for="confirm-password" id="">Confirm password</label>
                <svg version="1.1" viewBox="0 0 2048 2048" class="iconeLabelInpinfo"
                    xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(1e3 60)"
                        d="m0 0h46l39 3 42 6 28 6 35 10 26 9 24 10 29 14 25 13 21 13 19 13 19 14 14 11 11 9 16 15 12 11 9 9 7 8 12 13 9 11 12 15 10 14 18 27 15 26 18 36 12 29 14 41 7 26 7 36 4 28 2 28 1 24 1 57v197l20 2 28 5 24 8 17 8 16 10 16 13 12 11 12 14 10 15 8 16 6 13 6 20 3 18 2 30v756l-2 44-3 24-4 16-5 13-9 19-12 18-8 10-9 10-7 7-20 15-16 9-19 8-21 6-27 4-22 2-25 1h-1050l-30-2-25-4-17-5-16-7-16-9-17-13-12-11-8-8-13-17-7-11-8-14-8-20-5-17-3-17-2-25-1-62v-440l1-292 3-26 4-17 6-16 8-16 8-14 8-12 11-13 14-14 18-13 16-10 19-9 21-5 19-3 19-2h6v-240l1-31 3-36 5-32 9-41 7-25 12-33 12-28 12-25 13-24 12-20 17-25 21-28 9-10 7-8 7-7 7-8 4-4h2l2-4 8-8 8-7 7-7 22-18 16-12 30-20 32-19 32-16 25-11 28-10 30-9 30-7 41-6 31-3zm-8 121-32 3-29 5-25 6-36 12-24 10-19 9-23 13-11 7-16 11-12 9-16 13-8 7-10 9-17 17-7 8-9 10-9 11-9 12-15 23-11 18-8 15-10 21-14 36-10 35-6 25-4 32-1 15-1 34v236h841l1-1v-239l-1-33-3-28-5-31-8-30-11-33-12-28-10-20-10-18-14-22-14-19-11-13-9-11-29-29-10-8-12-10-19-14-17-11-24-14-17-9-23-10-26-10-34-10-29-6-21-3-29-2zm-403 782-97 1-25 1-14 2-8 3-10 8-6 8-5 11-3 16-1 25-1 123v641l2 21 4 13 5 9 5 6 13 8 12 4 20 3 33 1h1029l25-1 13-2 12-4 12-7 9-9 5-11 3-12 1-9 1-145v-624l-1-31-3-12-8-16-7-9-11-7-15-3-16-1-67-1z" />
                    <path transform="translate(1007,1144)"
                        d="m0 0h29l26 3 17 4 20 8 16 8 14 9 13 10 13 12 9 10 12 17 10 18 10 25 5 18 3 19 1 18-2 28-5 24-4 12-10 22-9 14-8 11-9 10-7 8-15 13-14 10-14 8-22 9-1 111-1 27-2 13-4 9-6 10-8 10-9 6-12 5-16 3-18-2-13-4-9-5-10-9-6-8-5-11-3-12-2-19v-120l-9-6-16-8-16-10-13-11-8-7-15-15-10-13-11-18-9-19-7-20-4-18-2-17v-17l5-32 7-24 7-16 10-19 8-12 12-15 8-7 8-8 18-13 14-8 21-9 15-5 23-4zm10 121-13 2-12 5-11 7-7 8-7 16-3 14v14l4 16 9 17 5 5 10 7 10 4 11 3 8 1h11l12-3 14-7 9-7 5-6 7-14 3-12v-17l-4-17-6-12-11-12-14-8-12-3z" />
                </svg>
            </div>
            <div class="LabelinpCheck acceptterms_cnt mt20">
                <input type="checkbox" name="acceptterms" id="acceptterms">
                <label for="acceptterms">Accept terms and privacy policies </label>
            </div>
            <button style="width:90%;align-self:center" class="br20 mb20 p10 bg-g  fw900 ">Next
                <svg xmlns="http://www.w3.org/2000/svg" class="ml20" viewBox="0 -960 960 960" fill="#000000">
                    <path d="m700-300-57-56 84-84H120v-80h607l-83-84 57-56 179 180-180 180Z" />
                </svg>
            </button>
        </div>
        <div class="cntIllustrationImg wkhmsin c-c-c psr hmia">
            <img src="illustrations/loginIll.png" alt="">
            <p class="error_message p10 bg-l ">
                Please note that all fields are necessary. Verify that your input is valid and accurate before submitting.
            </p>
        </div>
    </form>
    <script>
        document.querySelectorAll('input').forEach(el => {         el.onchange = () => {
                el.classList.remove('err_inp')
            }
        })
        const FormSignIn = document.querySelector(".cntFormRegister");
        FormSignIn.onsubmit = (e) => {
            e.preventDefault();
            let FinaleForm = new FormData(FormSignIn);
            FinaleForm.delete("_token");
            for (var [key, value] of FinaleForm.entries()) {
                if (value == "") {
                    Array.from(document.getElementsByName(key)).map(el => el.classList.add('err_inp'))
                } else {
                    Array.from(document.getElementsByName(key)).map(el => el.classList.remove('err_inp'))

                }
            }

            if (FinaleForm.get('gender') == null) {
                Array.from(document.getElementsByName('gender')).map(el => el.classList.add('err_inp'))
            } else {
                Array.from(document.getElementsByName('gender')).map(el => el.classList.remove('err_inp'))
            }
            if (FinaleForm.get('acceptterms') == null) {
                document.querySelector('.acceptterms_cnt').classList.add('err_inp');
            } else {
                document.querySelector('.acceptterms_cnt').classList.remove('err_inp');
            }
            if (FinaleForm.get('year') != null) {
                let year = FinaleForm.get('year');
                if (Number(year) > 2008 || Number(year) < 1910 || isNaN(Number(year))) {
                    Array.from(document.getElementsByName('year')).map(el => el.classList.add('err_inp'))
                }
            }
            if (FinaleForm.get('month') != null) {
                let month = FinaleForm.get('month');
                if (Number(month) > 12 || Number(month) <= 0 || isNaN(Number(month))) {
                    Array.from(document.getElementsByName('month')).map(el => el.classList.add('err_inp'))
                }
            }
            if (FinaleForm.get('day') != null) {
                let day = FinaleForm.get('day');
                if (Number(day) > 31 || Number(day) <= 0 || isNaN(Number(day))) {
                    Array.from(document.getElementsByName('day')).map(el => el.classList.add('err_inp'))
                }
            }
            if (FinaleForm.get('password') != '' && FinaleForm.get('confirm-password') != '') {
                let password = FinaleForm.get('password');
                let confirmPassword = FinaleForm.get('confirm-password');

                if (password.length < 6) {
                    Array.from(document.getElementsByName('password')).map(el => el.classList.add('err_inp'))
                }

                if (confirmPassword != password && password.length >= 6) {
                    Array.from(document.getElementsByName('confirm-password')).map(el => el.classList.add('err_inp'))
                }
            }

            if (FinaleForm.get('phone') != null) {
                let phone = FinaleForm.get('phone');
                if (isNaN(Number(phone))) {
                    Array.from(document.getElementsByName('phone')).map(el => el.classList.add('err_inp'))
                }
            }
            if (FinaleForm.get('email') != null) {
                let email = FinaleForm.get('email');
                if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
                    Array.from(document.getElementsByName('email')).map(el => el.classList.add('err_inp'))
                }
            }

            if (document.querySelectorAll('.err_inp').length > 0) {
                console.log(document.querySelector('.error_message'));

                document.querySelector('.error_message').classList.add("displayFlex");
                setTimeout(() => {
                    document.querySelector('.error_message').classList.remove("displayFlex");
                }, 5000);
            } else {
                FormSignIn.submit();
            }
        }
    </script>
@endsection
