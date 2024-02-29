import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import { configDefaults } from "vitest/config";

// Exclude everything except resources/js/
const projectExcludes = [
  "app/*",
  "boostrap/*",
  "config/*",
  "coverage/*",
  "database/*",
  "public/*",
  "resources/css/*",
  "resources/views/*",
  "routes/*",
  "storages/*",
  "tests/*",
  "vendor/*",
];

// eslint-disable-next-line import/no-default-export
export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/js/app.ts"],
      refresh: true,
    }),
  ],
  build: {
    sourcemap: true,
  },
  test: {
    environment: "jsdom",
    exclude: [...configDefaults.exclude, ...projectExcludes],
    coverage: {
      provider: "v8",
      exclude: [...(configDefaults.coverage.exclude ?? []), ...projectExcludes],
    },
    setupFiles: ["resources/js/setupFile.ts"],
  },
});
