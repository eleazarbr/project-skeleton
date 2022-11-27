module.exports = {
  root: true,
  env: {
    node: true,
    browser: true,
  },
  extends: [
    "airbnb-base",
    "eslint:recommended",
    "plugin:vue/vue3-recommended",
    "plugin:tailwindcss/recommended",
    "prettier",
  ],
  globals: {
    Vue: true,
    _: true,
    route: true,
    Ziggy: true,
    defineProps: "readonly",
    defineEmits: "readonly",
    defineExpose: "readonly",
    withDefaults: "readonly",
  },
  parserOptions: {
    parser: "@babel/eslint-parser",
    sourceType: "module",
    ecmaVersion: 2020,
    babelOptions: {
      configFile: "./babel.config.json",
    },
  },
  plugins: ["vue", "prettier", "tailwindcss"],
  rules: {
    "vue/require-default-prop": "off",
    "vue/require-prop-types": "off",
    "comma-dangle": ["error", "always-multiline"],
    quotes: ["error", "double", { allowTemplateLiterals: true }],
    eqeqeq: "error",
  },
  settings: {
    "import/resolver": {
      alias: {
        map: [["@", "./resources/js"]],
        extensions: [".js", ".vue"],
      },
    },
  },
  overrides: [
    {
      files: ["tests/**/*.js"],
      plugins: ["jest"],
      extends: ["plugin:jest/recommended"],
    },
  ],
};
