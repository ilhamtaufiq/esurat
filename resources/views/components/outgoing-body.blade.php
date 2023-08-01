<div id="mailCollapse{{ $letter->id }}" class="collapse" aria-labelledby="mailHeadingTwo" data-bs-parent="#mailbox-inbox">
  <div class="mail-content-container sentmail" data-mailfrom="info@mail.com" data-mailto="alan@mail.com" data-mailcc="">

    <div class="d-flex justify-content-between mb-3">
      <div class="d-flex user-info">
        <div class="f-body">
          <div class="meta-mail-time">
            <div class="">
              <p class="user-email"><span>Dikirim Kepada:</span> {{ $letter->to }}</p>
            </div>
            <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
            <p class="meta-time align-self-center">8:45 AM</p>
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
      </div>
    </div>
    <p class="mail-content" data-mailTitle="{{ $letter->note }}"
       data-maildescription='{"ops":[{"insert":"{{ $letter->description }}.\n"}]}'> {{ $letter->description }} </p>

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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-image">
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
  </div>
</div>
