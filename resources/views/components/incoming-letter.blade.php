
    <div class="mail-item mailInbox">
      <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThree">
        <div class="mb-0">
          <div class="mail-item-heading social collapsed" data-bs-toggle="collapse" role="navigation"
               data-bs-target="#mailCollapse{{ $letter->id }}" aria-expanded="false">
            <div class="mail-item-inner">

              <div class="d-flex">
                {{-- <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse"
                     data-bs-target>
                  <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default3">
                </div> --}}
                {{-- <div class="f-head">
                  <img src="{{ Vite::asset('resources/images/profile-16.jpeg') }}" class="user-profile" alt="avatar">
                </div> --}}
                <div class="f-body">
                  <div class="meta-mail-time">
                    <p class="user-email" data-mailTo="laurieFox@mail.com">
                      {{ $letter->type == 'incoming' ? $letter->from : $letter->to }}
                    </p>
                  </div>
                  <div class="meta-title-tag">
                    <p class="mail-content-excerpt"
                       data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'>
                      <span class="mail-title" data-mailTitle="Promotion Page">{{ $letter->classification_code }}-
                      </span>
                      {{ $letter->description }}
                    </p>
                    <p class="meta-time align-self-left">
                        <a href="{{ route('transaction.disposition.index', $letter) }}"
                           class="">{{ __('model.letter.dispose') }}
                          <span>({{ $letter->dispositions->count() }})</span></a>
                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div class="attachments">
              <span class="">Confirm File.txt</span>
              <span class="">Important Docs.xml</span>
            </div>
          </div>
        </div>
      </div>
    </div>


