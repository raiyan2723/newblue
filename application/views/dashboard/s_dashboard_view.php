    <!-- Flex Slider -->
	
    <script type="text/javascript" src="assest/components/flexslider/jquery.flexslider-min.js"></script>
    
    <script type="text/javascript">
        enableChaser = 0;
    </script>

    <!-- waypoint -->
    <script type="text/javascript" src="assest/js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="assest/js/theme-scripts.js"></script>
    
    <script type="text/javascript">
       tjq(document).ready(function() 
		{
            tjq("#profile .edit-profile-btn").click(function(e) {
                e.preventDefault();
                tjq(".view-profile").fadeOut();
                tjq(".edit-profile").fadeIn();
            });

            setTimeout(function() {
                tjq(".notification-area").append('<div class="info-box block"><span class="close"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>');
            }, 10000);
        });
        tjq('a[href="#profile"]').on('shown.bs.tab', function (e) {
            tjq(".view-profile").show();
            tjq(".edit-profile").hide();
        });
    </script>
</body>
</html>