<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/login_main.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    function logout() {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    }

    $(document).ready(function() {
        $('.permissions').select2();
    });


    $(document).ready(function(){
        $('.select2-multi').select2();
    });

    $(document).ready(function(){
        $('.select2-multi-form').select2();
    });

    $(document).ready(function() {
        $('#position_table').DataTable( {
            "pagingType": "full_numbers"
        });
    });
    $(document).ready(function() {
        $('#product_table').DataTable( {
            "pagingType": "full_numbers"
        });
    });

    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
</script>