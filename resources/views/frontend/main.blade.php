
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1 , maximum-scale=1"
    />
    <title>@yield('title') | {{(!empty($systemSetting) && $systemSetting->system_name) ? $systemSetting->system_name : config('app.name') }}</title>

    <!-- ==== All Css Links ==== -->
    @include('frontend.pertials.style')
  </head>
  <body>

    @include('frontend.pertials.header')

    @yield('content')

     <!-- footer area starts -->
     @include('frontend.pertials.footer')
    <!-- footer area ends -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose your location</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="section-text">
              Delivery options and delivery speeds may vary for different locations
            </div>
            <div class="apply-zip-code mt-5 d-flex gap-3 flex-wrap align-items-center justify-content-between ">
              <input placeholder="Enter zip code" type="text">
              <button class="apply-zip-code-btn section-btn ">Apply</button>
            </div>
            <div class="or-line-container mt-4">
              <div class="or-line" ></div>
              <div>or ship outside the USA</div>
              <div class="or-line" ></div>
            </div>
            <select class="nice-select mt-4 w-100 ">
              <option value="">Usa</option>
              <option value="">China</option>
              <option value="">Brazil</option>
            </select>
          </div>
          <div class="modal-footer mt-3">
            <button data-bs-dismiss="modal" type="button" class="section-btn py-2 px-4 ">Done</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ==== All Js Links ==== -->
    @include('frontend.pertials.script')

  </body>
</html>
