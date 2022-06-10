<?php
include './Views/frontend/admin/inc/header.php';
include('./Views/frontend/admin/inc/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <h1>Thống kê đơn hàng: <span id="text-date"></span></h1>
        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
    <script>
        $(document).ready(function() {
            new Morris.Line({

                element: 'myfirstchart',

                data: [{
                        year: '2008',
                        order: 5,
                        quantity: 20000
                    },
                    {
                        year: '2009',
                        quantity: 10
                    },
                    {
                        year: '2010',
                        quantity: 5
                    },
                    {
                        year: '2011',
                        quantity: 5
                    },
                    {
                        year: '2012',
                        quantity: 20
                    }
                ],

                xkey: 'year',

                ykeys: ['order', 'quantity'],

                labels: ['order']
            });
        });
    </script>
</div>

</div>

<?php
include('./Views/frontend/admin/inc/scripts.php');
include('./Views/frontend/admin/inc/footer.php');
?>