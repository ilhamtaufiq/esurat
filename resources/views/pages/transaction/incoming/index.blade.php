<x-base-layout :scrollspy="false">

  <x-slot:pageTitle>
    Manajemen Surat
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
      <!--  BEGIN CUSTOM STYLE FILE  -->
      <!--  BEGIN CUSTOM STYLE FILE  -->
      <link rel="stylesheet" href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}">
      @vite(['resources/scss/light/assets/components/modal.scss'])
      @vite(['resources/scss/light/assets/apps/mailbox.scss'])

      @vite(['resources/scss/dark/assets/components/modal.scss'])
      @vite(['resources/scss/dark/assets/apps/mailbox.scss'])
      <!--  END CUSTOM STYLE FILE  -->
      </x-slot>
      <!-- END GLOBAL MANDATORY STYLES -->

      <!-- BREADCRUMB -->
      <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Manajemen Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agenda</li>
            </li>
          </ol>
        </nav>
      </div>
      <!-- /BREADCRUMB -->
      <div class="row layout-top-spacing">
        <div class="col-md-12">
          <a data-bs-original-title="Tambah Surat Masuk" id="btn-compose-mail"
             class="btn btn-block btn-success bs-tooltip" href="javascript:void(0);"><svg
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-inbox">
              <polyline points="22 12 16 12 14 15 10 15 8 12 2 12">
              </polyline>
              <path
                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
              </path>
            </svg> </a>
          <a data-bs-original-title="Tambah Surat Keluar" id="btn-compose-out" class="btn btn-block btn-info bs-tooltip"
             href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="feather feather-send">
              <line x1="22" y1="2" x2="11" y2="13"></line>
              <polygon points="22 2 15 22 11 13 2 9 22 2">
              </polygon>
            </svg> </a>
        </div>
      </div>
      <div class="row layout-top-spacing">
        <div class="col-md-12">
          <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="row">
                <div class="col-xl-12 col-md-12">
                  <div class="mail-box-container">
                    <div class="mail-overlay"></div>
                    <div class="tab-title">
                      <div class="row">
                        {{-- Insert Image Here / Logo Pemda --}}
                        <div class="col-md-12 col-sm-12 col-12 mail-categories-container">
                          <div class="mail-sidebar-scroll">
                            <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link list-actions active" id="mailInbox"><svg
                                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                       viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                       stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12">
                                    </polyline>
                                    <path
                                          d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                  </svg> <span class="nav-names">Surat Masuk</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link list-actions" id="sentmail"><svg xmlns="http://www.w3.org/2000/svg"
                                       width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                       stroke-linejoin="round" class="feather feather-send">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2">
                                    </polygon>
                                  </svg> <span class="nav-names">Surat Keluar</span></a>
                              </li>
                            </ul>
                            <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                   class="feather feather-tag">
                                <path
                                      d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                </path>
                                <line x1="7" y1="7" x2="7" y2="7"></line>
                              </svg> Groups</p>

                            <ul class="nav nav-pills d-block group-list" id="pills-tab2" role="tablist">
                              <li class="nav-item">
                                <button class="nav-link list-actions g-dot-primary input-filter"
                                        value="Sekretariat"><span>Sekretariat</span></button>
                              </li>
                              <li class="nav-item">
                                <button class="nav-link list-actions g-dot-warning input-filter"
                                        value="AMS"><span>AMS</span></button>
                              </li>
                              <li class="nav-item">
                                <button class="nav-link list-actions g-dot-danger input-filter"
                                        value="PKP"><span>PKP</span></button>
                              </li>
                              <li class="nav-item">
                                <button class="nav-link list-actions g-dot-success input-filter"
                                        value="BG"><span>BG</span></button>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="mailbox-inbox" class="accordion mailbox-inbox">
                      <div class="search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none">
                          <line x1="3" y1="12" x2="21" y2="12"></line>
                          <line x1="3" y1="6" x2="21" y2="6"></line>
                          <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <input type="text" class="form-control input-search" placeholder="Cari surat...">
                      </div>
                      <div class="message-box">
                        <div class="message-box-scroll" id="ct">
                          @foreach ($data as $letter)
                            <x-incoming-letter :letter="$letter" />
                          @endforeach
                          @foreach ($out as $letter)
                            <x-outgoing-letter :letter="$letter" />
                          @endforeach
                          {{-- {!! $data->links() !!} --}}
                        </div>
                      </div>
                      <div class="content-box">
                        <div class="d-flex msg-close">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                               stroke-linejoin="round" class="feather feather-arrow-left close-message">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                          </svg>
                          <h2 class="mail-title" data-selectedMailTitle=""></h2>
                        </div>
                        @foreach ($data as $letter)
                          <x-incoming-body :letter="$letter" />
                        @endforeach
                        @foreach ($out as $letter)
                          <x-outgoing-body :letter="$letter" />
                        @endforeach
                      </div>
                    </div>
                  </div>

                  <!-- Modal Surat Masuk-->
                  <div class="modal fade modal-xl" id="composeMailModal" tabindex="-1" role="dialog"
                       aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">
                            Tambah Surat Masuk</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                          </button>
                        </div>

                        <div class="modal-body">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> -->
                          <div class="compose-box">
                            <div class="compose-content">
                              <form action="{{ route('transaction.incoming.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row" id="m-to">
                                  <input type="hidden" name="type" value="incoming">
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="reference_number" :label="__('model.letter.reference_number')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="from" :label="__('model.letter.from')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="agenda_number" :label="__('model.letter.agenda_number')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                                    <x-input-form name="letter_date" :label="__('model.letter.letter_date')" type="date" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                                    <x-input-form name="received_date" :label="__('model.letter.received_date')" type="date" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                                    <x-input-textarea-form name="description" :label="__('model.letter.description')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                      <label for="classification_code"
                                             class="form-label">{{ __('model.letter.classification_code') }}</label>
                                      <select class="form-select" id="classification_code"
                                              name="classification_code">
                                        @foreach ($classifications as $classification)
                                          <option value="{{ $classification->code }}" @selected(old('classification_code') == $classification->code)>
                                            {{ $classification->type }}
                                          </option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="note" :label="__('model.letter.note')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                      <label for="attachments"
                                             class="form-label">{{ __('model.letter.attachment') }}</label>
                                      <input type="file"
                                             class="form-control @error('attachments') is-invalid @enderror"
                                             id="attachments" name="attachments[]" multiple />
                                      <span class="error invalid-feedback">{{ $errors->first('attachments') }}</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button id="btn-save" type="submit" class="btn btn-success float-left">
                            Simpan</button>
                          </form>
                          <button class="btn" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i>
                            Batal</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{-- Modal Surat Keluar --}}
                  <div class="modal fade modal-xl" id="composeOutModal" tabindex="-1" role="dialog"
                       aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">
                            Tambah Surat Keluar</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                          </button>
                        </div>

                        <div class="modal-body">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> -->
                          <div class="compose-box">
                            <div class="compose-content">
                              <form action="{{ route('transaction.outgoing.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row" id="m-to">
                                  <input type="hidden" name="type" value="outgoing">
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="reference_number" :label="__('model.letter.reference_number')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="to" :label="__('model.letter.to')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="agenda_number" :label="__('model.letter.agenda_number')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-12">
                                    <x-input-form name="letter_date" :label="__('model.letter.letter_date')" type="date" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                                    <x-input-textarea-form name="description" :label="__('model.letter.description')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                      <label for="classification_code"
                                             class="form-label">{{ __('model.letter.classification_code') }}</label>
                                      <select class="form-select" id="classification_code"
                                              name="classification_code">
                                        @foreach ($classifications as $classification)
                                          <option value="{{ $classification->code }}" @selected(old('classification_code') == $classification->code)>
                                            {{ $classification->type }}
                                          </option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <x-input-form name="note" :label="__('model.letter.note')" />
                                  </div>
                                  <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                      <label for="attachments"
                                             class="form-label">{{ __('model.letter.attachment') }}</label>
                                      <input type="file"
                                             class="form-control @error('attachments') is-invalid @enderror"
                                             id="attachments" name="attachments[]" multiple />
                                      <span class="error invalid-feedback">{{ $errors->first('attachments') }}</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button id="btn-save" type="submit" class="btn btn-success float-left">
                            Simpan</button>
                          </form>
                          <button class="btn" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i>
                            Batal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

      <!--  BEGIN CUSTOM SCRIPTS FILE  -->
      <x-slot:footerFiles>

        {{-- <script src="{{asset('plugins/apex/custom-apexcharts.js')}}"></script> --}}
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        <script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>
        @vite(['resources/assets/js/apps/mailbox.js'])
        </x-slot>
        <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
