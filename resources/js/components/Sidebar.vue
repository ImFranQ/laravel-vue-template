<template>
  <div id="side-menu" :class="classMenu" @keyup.space="console.log('yeah baby')">
    <!-- <transition name="collapsed"> -->
      <aside class="sidebar">
        <slot name="sidebar"></slot>
      </aside>
    <!-- </transition> -->
    <section class="side-content">
      <!-- <button @click.prevent="toogleMenu()">:d</button> -->
      <slot></slot>
    </section>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        collapsed: false
      }
    },
    computed: {
      classMenu(){
        return {
          collapsed: this.collapsed
        }
      }
    },
    mounted() {
      if( window.innerWidth < 720 ){
        // console.log('here')
        this.hide();
      }
    },
    methods: {
      toogleMenu(){
        this.collapsed = !this.collapsed
      },
      show(){
        this.collapsed = true
      },
      hide(){
        // console.log('here');
        this.collapsed = false
      }
    }
  }
</script>

<style lang="scss">
  #side-menu{
    height: calc(100% - 60px);
    position: relative;
    display: flex;
    .menu-label{
      transition: opacity 0.3s;
    }
    a.side-link{
      width: 300px;
    }
    .sidebar{
      position: absolute;
      z-index: 1;
      height: 100%;
      background: #fff;

      width: 100%;
      max-width: 300px;
      overflow-x: hidden;
      border-right: 1px solid #ddd;

      -webkit-transition: width 0.3s;
      -moz-transition: width 0.3s;
      -ms-transition: width 0.3s;
      transition: width 0.3s;
    }
    .side-content{
      flex-grow: 1;
      width: 100%;
    }
    &.collapsed{
      .menu-label{
        opacity: 0;
        overflow: hidden;
      }
    }
  }
  #side-menu.collapsed{
    .sidebar{
      width: 0px;
    }
  }
  
  @media (min-width: 768px) {
    #side-menu{
      .sidebar{
        position: initial;
      }
      .side-content{
        width: auto;
      }
    }
    #side-menu.collapsed{
      .sidebar{
        width: 68px;
      }
    }
  }
</style>