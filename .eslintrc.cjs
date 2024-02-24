module.exports = {
  root: true,
  env: { browser: true, es2020: true },
  extends: [
    "eslint:recommended",
    "plugin:@typescript-eslint/strict-type-checked",
    "plugin:@typescript-eslint/stylistic-type-checked",
    "plugin:import/recommended",
    "plugin:import/typescript",
    "prettier",
  ],
  parser: "@typescript-eslint/parser",
  parserOptions: {
    project: [
      "./tsconfig.json",
      "./tsconfig.app.json",
      "./tsconfig.node.json",
      "./tsconfig.vitest.json",
    ],
    tsconfigRootDir: __dirname,
  },
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
  reportUnusedDisableDirectives: true,
};
