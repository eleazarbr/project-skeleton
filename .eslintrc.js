module.exports = {
  root: true,
  env: {
    node: true,
    browser: true,
  },
  globals: {
    Vue: true,
    _: true,
  },
  extends: [
    "eslint:recommended",
    "plugin:vue/recommended",
    "airbnb-base",
    "plugin:prettier/recommended",
  ],
  parserOptions: {
    parser: "@babel/eslint-parser",
    sourceType: "module",
    ecmaVersion: 2020,
    babelOptions: {
      configFile: "./babel.config.json",
    },
  },
  plugins: ["vue", "prettier"],
  rules: {
    quotes: ["error", "double", { allowTemplateLiterals: true }],
    eqeqeq: "error",
    "max-len": [
      "error",
      {
        code: 140,
        ignoreComments: true,
        ignoreUrls: true,
      },
    ],
  },
  overrides: [
    {
      files: ["tests/**/*.js"],
      plugins: ["jest"],
      extends: ["plugin:jest/recommended"],
    },
  ],
};
