 <!-- Bootstrap core JavaScript-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            tampil_data_barang();   //pemanggilan fungsi tampil barang.
             
            //fungsi tampil barang
            function tampil_data_barang(){
                $.ajax({
                    type  : 'get',
                    url   : '<?php echo base_url()?>admin/invoice/data_invoice',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                    console.log(data);
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].nama+'</td>'+
                                    '<td>'+data[i].alamat+'</td>'+
                                    '<td>'+data[i].tgl_pesan+'</td>'+
                                    '<td>'+data[i].batas_bayar+'</td>'+
                                    '<td><a href="<?php echo base_url() ?>admin/invoice/detail/'+data[i].id+'">Detail</a></td>'+
                                    '</tr>';
                        }
                        $('#show_data').html(html);
                        $('#mydata').DataTable();
                        console.log(data);
                    }
     
                });
            }
     
        });
     
    </script>

</body>

</html>