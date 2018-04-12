<template>
  <div>
      <h1>你好</h1>
      <el-button @click="open">按钮</el-button>
      <p class="hello">{{msg}}</p>
  </div>
</template>
<script>
export default {
    data () {
        return {
            msg:'这是一个例子',
            visible:false
        }
    },
    methods:{
        open(){
            this.$alert('这是一段内容','标题名称',{
                confirmButtonText:'确定',
                callback: action =>{
                    this.$message({
                        type:'info',
                        message:'action:${action}'
                    });
                }
            })
        }
    }
}
</script>

<style>
    .hello{
        font-size: 2em;
        color: green;
    }
</style>


