</div>
<!-- page-body-wrapper ends -->

</div>
<!-- container-scroller -->
@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>

@elseif(session('NoPermit'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Sala Ocupada nesta Data',
        showConfirmButton: true
    })
</script>
@endif

<script>
    function mens() {
        confirm('Tem certeza de que deseja excluir este arquivo');
    }
</script>


{{-- Modais Essenciais --}}
@include('extra.modals.index')



<!-- SCRIPTS -->

@yield('jQueryAPI')
<!-- Dashboard summery End Here -->
<!-- Dashboard Content Start Here -->




<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="/js/sweetalert2.all.min.js"></script>
<script src="/dashboard/assets/js/jquery-3.6.0.min.js"></script>
<script src="/dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard/assets/js/feather.min.js"></script>
<script src="/dashboard/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/dashboard/assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="/dashboard/assets/plugins/apexchart/chart-data.js"></script>
<script src="/dashboard/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/dashboard/assets/plugins/datatables/datatables.min.js"></script>
<script src="/dashboard/assets/js/script.js"></script>

<script src="/dashboard/assets/js/jquery-3.6.0.min.js"></script>
<script src="/dashboard/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/dashboard/assets/plugins/select2/js/select2.min.js"></script>
<script src="/dashboard/assets/plugins/moment/moment.min.js"></script>
<script src="/dashboard/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [8, 16, 32, 64, -1],
            [8, 16, 32, 64, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>



<script>
    $(document).ready(function() {

        $('#deleteCategoryBtn').click(function(e) {
            e.preventDefault();
            var category_id = $(this).val();
            console.log(category_id);
            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');

        });
    });
</script>
</body>

</html>




</body>

<!-- Mirrored from preschool.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 08:43:51 GMT -->

</html>
