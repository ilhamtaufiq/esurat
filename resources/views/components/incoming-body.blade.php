<div id="mailCollapse{{ $letter->id }}" class="collapse" aria-labelledby="mailHeadingThree"
     data-bs-parent="#mailbox-inbox">
  <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="linda@mail.com" data-mailcc="">

    <div class="d-flex justify-content-between">

      <div class="d-flex user-info">
        <div class="f-head">
          <img src="{{ Vite::asset('resources/images/profile-16.jpeg') }}" class="user-profile" alt="avatar">
        </div>
        <div class="f-body">
          <div class="meta-title-tag">
            <h4 class="mail-usr-name" data-mailtitle="{{ $letter->note }}">{{ $letter->from }}</h4>
          </div>
          <div class="meta-mail-time">
            <p class="">Tanggal Surat: {{ $letter->letter_date }} : Diterima Tanggal: {{ $letter->received_date }}
            </p>
          </div>
        </div>
      </div>

      <div class="">

        <form id="letter-destroy" action="{{ route('transaction.incoming.destroy', $letter) }}" class="d-inline"
              method="post">
          @csrf
          @method('DELETE')

        </form>
        <a href="{{ route('transaction.incoming.destroy', $letter) }}"
           onclick="event.preventDefault(); document.getElementById('letter-destroy').submit();">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-trash-2 s-task-delete">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
          </svg>
        </a>
        <button type="button" class="btn btn-warning mr-2" data-bs-toggle="modal"
                data-bs-target="#dispoModal{{ $letter->id }}">
          Disposisi Surat
        </button>
      </div>
    </div>

    <p class="mail-content" data-mailTitle="{{ $letter->type == 'incoming' ? $letter->from : $letter->to }}"
       data-maildescription='{"ops":[{"insert":"{{ $letter->description }}.\n"}]}'>
      {{ $letter->description }}
    </p>
    <div class="attachments">
      <h6 class="attachments-section-title">Attachments</h6>
      @if (count($letter->attachments))
        <div>
          @foreach ($letter->attachments as $attachment)
            <a href="{{ $attachment->path_url }}" target="_blank">
              @if ($attachment->extension == 'pdf')
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-file-text">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                  </path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg> {{ $attachment->filename }}
              @elseif(in_array($attachment->extension, ['jpg', 'jpeg']))
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-image">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                  </rect>
                  <circle cx="8.5" cy="8.5" r="1.5"></circle>
                  <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
              @elseif($attachment->extension == 'png')
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-image">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                  </rect>
                  <circle cx="8.5" cy="8.5" r="1.5"></circle>
                  <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
              @endif
            </a>
          @endforeach
        </div>
      @endif
    </div>
    <div class="attachments">
      <h6 class="attachments-section-title">Disposisi</h6>
      @foreach ($letter->dispositions as $disposition)
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="d-flex justify-content-between flex-column flex-sm-row">
              <div class="card-title">
                <h5 class="text-nowrap fw-bold mb-0">{{ $disposition->status?->status }}</h5>
                <small class="text-black">{{ $disposition->to }}</small>
              </div>
              <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                  <small class="d-block text-secondary">{{ __('model.disposition.due_date') }}</small>
                  {{ $disposition->formatted_due_date }}
                </div>
                <div class="dropdown d-inline-block">
                  <button class="btn p-0" type="button" id="dropdown-disposition-{{ $disposition->id }}"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end"
                       aria-labelledby="dropdown-disposition-{{ $disposition->id }}">
                    <a class="dropdown-item"
                       href="{{ route('transaction.disposition.edit', [$letter, $disposition]) }}">{{ __('menu.general.edit') }}</a>
                    <form action="{{ route('transaction.disposition.destroy', [$letter, $disposition]) }}"
                          class="d-inline" method="post">
                      @csrf
                      @method('DELETE')
                      <span class="dropdown-item btn-delete cursor-pointer">{{ __('menu.general.delete') }}</span>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <hr>
            <p>{{ $disposition->content }}</p>
            <small class="text-secondary">{{ $disposition->note }}</small>
            {{ $slot }}
          </div>
        </div>
      @endforeach
    </div>

  </div>
</div>
{{-- Modal Disposisi Surat --}}
<div class="modal fade modal-xl" id="dispoModal{{ $letter->id }}" tabindex="-1" role="dialog"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">
          Tambah Disposisi Surat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>

      <div class="modal-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          {{ __('model.disposition.notice_me', ['reference_number' => $letter->reference_number]) }}
          <a href="{{ route('transaction.incoming.show', $letter) }}"
             class="fw-bold">{{ __('menu.general.view') }}</a>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="compose-box">
          <div class="compose-content">
            <form action="{{ route('transaction.disposition.store', $letter) }}" method="POST"
                  enctype="multipart/form-data">
              @csrf
              <div class="card-body row" id="m-to">
                <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                  <x-input-form name="to" :label="__('model.disposition.to')" />
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                  <x-input-form name="due_date" :label="__('model.disposition.due_date')" type="date" />
                </div>
                <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                  <x-input-textarea-form name="description" :label="__('model.disposition.content')" />
                </div>

                <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                  <div class="mb-3">
                    <label for="letter_status" class="form-label">{{ __('model.disposition.status') }}</label>
                    <select class="form-select" id="letter_status" name="letter_status">
                      <option value="1">Rahasia</option>
                      <option value="2">Segera</option>
                      <option value="3">Biasa</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-8">
                  <x-input-form name="note" :label="__('model.disposition.note')" />
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                  <div class="mb-3">
                    <label for="attachments" class="form-label">{{ __('model.letter.attachment') }}</label>
                    <input type="file" class="form-control @error('attachments') is-invalid @enderror"
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
