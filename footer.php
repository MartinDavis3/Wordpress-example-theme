  <footer>
    <h2>Footer</h2>
    <p>
      &copy;
      <?php echo date( 'Y' ); ?>
      Martin Davis
    </p>
    <?php if ( function_exists( 'output_hello_world' ) ) : // Check if the plugin function exists. ?>
      <aside>
        <?php output_hello_world(); ?>
      </aside>
    <?php endif; ?>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>