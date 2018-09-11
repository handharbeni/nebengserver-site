<body>
    <?php $this->load->view('html/top'); ?>
    <?php $this->load->view($content); ?>
    <?php $this->load->view('html/bottom'); ?>

    <a href="#top" id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <?php $this->load->view('html/script'); ?>
</body>