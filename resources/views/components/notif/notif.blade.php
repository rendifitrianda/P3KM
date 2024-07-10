
@push('js')
    @if (session('success'))
    <script>
        toastr.success(
             'Success', "{{ session('success') }}",
             {
                 showEasing : 'swing',
                 hideEasing : 'linear',
                 closeButton: true,
                 extendedTimeOut: 300,
                 showMethod: 'slideDown',
                 hideMethod: 'slideUp',
                 positionClass: 'toast-top-right'
             }
         )
     </script>
    @endif

    @if (session('danger'))
        <script>
           toastr.error(
             'Error', "{{ session('danger') }}",
             {
                 showEasing : 'swing',
                 hideEasing : 'linear',
                 closeButton: true,
                 extendedTimeOut: 300,
                 showMethod: 'slideDown',
                 hideMethod: 'slideUp',
                 positionClass: 'toast-top-right'
             }
         )
        </script>
    @endif
@endpush
