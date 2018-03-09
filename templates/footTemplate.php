
		</div><!--/.container-fluid -->

<nav class="navbar navbar-default navbar-fixed-bottom navbar-small">
      <div class="container-fluid">
        <div class="navbar-header">
          <p class="navbar-text">&copy; Luc, 2014</p>
        </div>
       <nav class="nav navbar-nav navbar-right">
         <!-- <a class="">Debug</a> -->
			<?php if(__DEBUG): ?>
			<button type="submit" class="btn btn-xs btn-danger" onclick="showDebug()">Debug</button>
		<?php endif ?>
       </nav>
      </div>
</nav>	  

<script src="<?php echo __BASE_URL; ?>/js/utils.js"></script>

	</body>
</html>
