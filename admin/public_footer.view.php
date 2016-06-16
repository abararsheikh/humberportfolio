</div>
</div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/admin/assets/js/morris/raphael.min.js"></script>
<script src="/admin/assets/js/morris/morris.min.js"></script>
<script src="/admin/assets/js/morris/morris-data.js"></script>

<?php
    //Custom JS
    if( isset( $admin_custom_js ) ):
        foreach( $admin_custom_js as $js_file ):
?>
<script src="<?php echo $js_file; ?>"></script>
<?php
        endforeach;
    endif;
?>

</body>

</html>