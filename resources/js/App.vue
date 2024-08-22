<template>
    <div id="app">
      <menu-bar />
      <banner />
      <services-section />
      <contact-us />
      <footer-section />
    </div>
  </template>
  
  <script>
  import MenuBar from './components/MenuBar.vue';
  import Banner from './components/Banner.vue';
  import ServicesSection from './components/ServicesSection.vue';
  import ContactUs from './components/ContactUs.vue';
  import FooterSection from './components/FooterSection.vue';
  
  export default {
    components: {
      MenuBar,
      Banner,
      ServicesSection,
      ContactUs,
      FooterSection,
    },
  };
  </script>
  