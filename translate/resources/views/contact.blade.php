@extends('layout.master')

@section('content')
    <div class="content-block stick-to-footer">
        <div class="container-bg with-bg container-fluid"
            data-style="background-image: url(https://static.wixstatic.com/media/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg/v1/fill/w_1903,h_660,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg);">
            <div class="container-bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-item-title">
                                <h1 class="text-center texttransform-none">{{ __('contact.contact') }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container container">
            <div class="row">
                <div class="col-md-12 entry-content">
                    <article>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner vc_custom_1490279597723">
                                    <div class="wpb_wrapper">

                                        <div
                                            class="wpb_text_column wpb_content_element vc_custom_1502028795994 text-size-medium">
                                            <div class="wpb_wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1502030957960">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner vc_custom_1502031827735">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element text-size-medium">
                                            <div class="wpb_wrapper">
                                                <h3 style="text-align: left;">{{ __('contact.title') }}</h3>

                                            </div>
                                        </div>
                                        {{-- <div
                                        class="mgt-button-wrapper mgt-button-wrapper-align-left mgt-button-wrapper-display-newline mgt-button-top-margin-true mgt-button-right-margin-false mgt-button-round-edges-full wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp"
                                    >
                                        <a
                                            class="btn hvr-grow mgt-button-icon- mgt-button mgt-style-solid mgt-size-normal mgt-align-left mgt-display-newline mgt-text-size-normal mgt-button-icon-separator- mgt-button-icon-position-left text-font-weight-default mgt-text-transform-none"
                                            href="#"
                                        >
                                            Find us on map
                                        </a>
                                    </div> --}}
                                        <div
                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1502030988502 vc_custom_1502030988502">
                                            <span class="vc_sep_holder vc_sep_holder_l"><span
                                                    class="vc_sep_line"></span></span><span
                                                class="vc_sep_holder vc_sep_holder_r"><span
                                                    class="vc_sep_line"></span></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h3 style="text-align: left;">{{ __('contact.contact1') }}</h3>
                                                <p style="text-align: left;">
                                                    {{ __('contact.contact2') }}<br />
                                                    <a
                                                        href="Info.Sarayirestaurant.eg@gmail.com">Info.Sarayirestaurant.eg@gmail.com</a><br />
                                                    {{ __('contact.contact3') }}<br />
                                                    <a
                                                        href="n.mohamed@sarayiresturant.com">n.mohamed@sarayiresturant.com</a><br />

                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1502030988502 vc_custom_1502030988502">
                                            <span class="vc_sep_holder vc_sep_holder_l"><span
                                                    class="vc_sep_line"></span></span><span
                                                class="vc_sep_holder vc_sep_holder_r"><span
                                                    class="vc_sep_line"></span></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h3 style="text-align: left;"> </h3>
                                                <p style="text-align: left;">
                                                    {{ __('contact.contact4') }}<br />
                                                    {{ __('contact.contact5') }}<br />
                                                    {{ __('contact.contact6') }}

                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                        </div>
                                        <div class="wpb_text_column wpb_content_element">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1502031809115">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element text-size-medium">
                                            <div class="wpb_wrapper">
                                                <h3 style="text-align: left;">{{ __('contact.send') }}</h3>
                                                @if (Session::has('success'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('success') }}
                                                        @php
                                                            Session::forget('success');
                                                        @endphp
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="form" class="wpcf7">
                                            <div class="screen-reader-response"></div>

                                            <form method="POST" action="{{ route('contact.us.store') }}"
                                                id="contactUSForm">
                                                {{ csrf_field() }}

                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name"
                                                                    size="40" class="input1" aria-required="true"
                                                                    aria-invalid="false"
                                                                    placeholder="{{ __('contact.name') }}*"value="{{ old('name') }}">
                                                                @if ($errors->has('name'))
                                                                    <span class="text-danger"
                                                                        style="color:red;">{{ $errors->first('name') }}</span>
                                                                @endif

                                                            </span>

                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email"
                                                                    size="40" class="input1" aria-required="true"
                                                                    aria-invalid="false" value="{{ old('subject') }}"
                                                                    placeholder="{{ __('contact.email') }}*">

                                                                @if ($errors->has('email'))
                                                                    <span class="text-danger"
                                                                        style="color:red;">{{ $errors->first('email') }}</span>
                                                                @endif
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false"
                                                                    placeholder="{{ __('contact.message') }}*">{{ old('message') }}</textarea>

                                                                @if ($errors->has('message'))
                                                                    <span class="text-danger"
                                                                        style="color:red;">{{ $errors->first('message') }}</span>
                                                                @endif

                                                            </span>
                                                        </p>
                                                    </div>

                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit ">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit" value="Submit" class="submit-button"
                                                                style="margin-top:20px"><span>{{ __('contact.button') }}</span></button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span
                                                                class="quform-loading"></span></div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
