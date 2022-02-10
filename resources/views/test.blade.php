<!DOCTYPE html>
<html>
<style>
th,td {
  padding: 5px;
}
</style>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<body>

<h2>The XMLHttpRequest Object</h2>

<form action=""> 
  <select class="faculty">
  <option value="" selected="true" disabled="true">Select faculty</option>
    @foreach($infos as $i)
      <option value="{{$i->id}}">{{$i->fname}}</option>
    @endforeach
  </select>

  <select class="module">
  <option value="" selected="true" disabled="true">Select Module</option>
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>
<script>
  $(document).ready(function(){
      $(document).on('change','.faculty',function(){
        var id=$(this).val();
        var div=$(this).parent();

        var op=""
        
        $.ajax({
               type:'get',
               url:'/getCustomer',
               data:({"id":id}),
               success:function(data) {
                  console.log(data)
                  op+='<option value="" selected disabled>Choose Module</option>';
                  for(var i=0;i<data.length;i++)
                  {
                    op+='<option value="'+data[i].id+'">'+data[i].mname+'</option>';
                  }
                  div.find('.module').html('');
                  div.find('.module').append(op);

                  }
            });
        
      });
  });
</script>
</body>
</html>
