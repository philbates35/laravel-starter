import { JSDOM } from "jsdom";
import { expect, test } from "vitest";

test("jsdom works as expected", () => {
  const element = document.createElement("div");
  expect(element).not.toBeNull();

  const dom = new JSDOM(`<!DOCTYPE html><p>Hello world</p>`);
  expect(dom.window.document.querySelector("p")?.textContent).toBe(
    "Hello world",
  );
});
