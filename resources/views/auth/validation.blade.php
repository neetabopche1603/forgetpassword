@if ( Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ Session::get('success') }}</strong>
            </div>
            @elseif (Session::get('delete'))                        
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ Session::get('delete') }}</strong>
            </div>

            @elseif (Session::get('faild'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ Session::get('faild') }}</strong>
            </div>
            @endif
