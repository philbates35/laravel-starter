import "../css/app.css";
import "./bootstrap.ts";

import { StrictMode } from "react";
import { createRoot } from "react-dom/client";

import { App } from "./App.tsx";

const root = document.getElementById("root");

if (root) {
  createRoot(root).render(
    <StrictMode>
      <App />
    </StrictMode>,
  );
}
