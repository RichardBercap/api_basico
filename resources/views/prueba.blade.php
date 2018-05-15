<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="app">
	
	<pre>@{{ vector}}</pre>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.common.js"></script>
<script type="text/javascript">
	  const app = new Vue({
      el:"#app",
      data:{
        vector:[
          {"nombre":"Richard","apellido":"Berna"},
          {"nombre":"Delfin","apellido":"Berna"},
          {"nombre":"Victor","apellido":"Berna"}
        ],
        vector2 : ""
      },
      methods:{
        co:function(){
          this.vector2 = this.vector + "";
        }
      }
    });
</script>
</body>
</html>