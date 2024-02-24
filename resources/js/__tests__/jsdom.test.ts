import { expect, test } from "vitest";

test("jsdom works as expected", () => {
  const element = document.createElement("div");
  expect(element).not.toBeNull();
});
