<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 15,
  interval: 30000,
  width: 325,
  height: 450,
  theme: {
    shell: {
      background: '#00c8ff',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#006ec8',
      links: '#000000'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('fabiangomezh').start();
</script>