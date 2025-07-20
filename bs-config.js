module.exports = {
  // proxy: "jason-macbook-pro.local/wordpress",
  proxy: "localhost/wordpress",
  files: ["*.php", "page/*.php", "*.css", "*.js"],
  ignore: ["node_modules"],
  reloadDelay: 100,
  notify: true,
  port: 3000,
  open: true,
};
