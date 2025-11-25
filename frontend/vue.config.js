module.exports = {
  css: {
    loaderOptions: {
      sass: {
        additionalData: `
          @import "@/app/assets/styles/_variables.scss";
          @import "@/app/assets/styles/_mixins.scss";
        `
      }
    }
  }
};
