// App.vue

<template>
    <div class="">
        <!-- <navbar></navbar> -->
        <transition name="fade">
            <router-view></router-view>
        </transition>
    </div>
</template>

<style lang="css">

  /*@import '~/bulma/css/bulma';*/

  body{
    background-color: #fff !important;
  }

  .page{
    height: inherit;
  }


  /*working

  .fade-enter-active, .fade-leave-active {
    transition: opacity 1s ease-out;
  }

  .fade-enter, .fade-leave-to{
    opacity: 0;
  }*/

  /*works like magic*/

  .fade-enter-active{
    animation: fade-in .5s;
  }

  .fade-leave-active{
    animation: fade-out;
  }

  @keyframes fade-in{

    from{
      transform: translateX(-50px);
      opacity: 0;
    }

    to{
      transform: translateX(0px);
      opacity: 1;
    }

  }

  @keyframes fade-out{
    from{
      opacity: 1px;
    }

    to{
      opacity: 0px;
    }
  }

</style>

<script>

  import Navbar from './components/Nav.vue'

  export default {

    name: 'app',

    components: {
      Navbar
    },
    
    data() {
      return {

          user: {},
          menu: Navbar.menu
      }
    },

    methods: {
      
      
    },


    mounted() {
      // console.log()
    },
  }
  
</script>
