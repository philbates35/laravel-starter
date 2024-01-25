module.exports = {
  root: true,
  env: { browser: true, es2020: true },
  extends: [
    "eslint:recommended",
    "plugin:@typescript-eslint/recommended",
    "plugin:import/recommended",
    "plugin:import/typescript",
    "prettier",
  ],
  parser: "@typescript-eslint/parser",
  plugins: ["import"],
  rules: {
    "import/exports-last": "error",
    "import/extensions": ["error", "always"],
    "import/first": "error",
    "import/newline-after-import": "error",
    "import/no-default-export": "error",
    "import/order": [
      "error",
      {
        alphabetize: { order: "asc" },
        "newlines-between": "always",
      },
    ],
  },
  settings: {
    "import/resolver": { typescript: true },
  },
};
