---
name: bootstrap-6
description: "Always invoke when building, editing, styling, or refactoring UI components, layouts, or stylesheets with Bootstrap 6. Covers: Bootstrap 6 utility classes, components (buttons, navbar, modal, cards, accordion, offcanvas, forms, etc.), grid system and container queries, color modes and CSS variables, SCSS / CSS imports in Vite, modern JavaScript component APIs, and migration from Bootstrap 5 to Bootstrap 6."
license: MIT
metadata:
  author: project
---

# Bootstrap 6 Development & Migration

## Overview

This project uses Bootstrap 6 (`bootstrap@^6.0.0-alpha.1`) with Vite and Laravel.
Always adhere to Bootstrap 6 conventions and CSS-variable-first styling.

## Asset Integration & Vite

- In `resources/css/app.css` or SCSS files, Bootstrap is imported:
  ```css
  @import "bootstrap";
  ```
  Or specific modules:
  ```scss
  @import "bootstrap/scss/bootstrap";
  ```
- In `resources/js/app.js`:
  ```javascript
  import * as bootstrap from 'bootstrap';
  window.bootstrap = bootstrap;
  ```

## Core Principles & Conventions

1. **Utility-First & CSS Custom Properties**:
   - Bootstrap 6 relies heavily on CSS variables (`var(--bs-*)`). Prefer theme tokens and utility classes before writing custom CSS.
   - Use contextual colors (`primary`, `secondary`, `success`, `danger`, `warning`, `info`, `light`, `dark`).

2. **Layout & Grid**:
   - Use `.container`, `.container-fluid`, or responsive containers (`.container-{sm|md|lg|xl|xxl}`).
   - Grid uses `.row` with `.col`, `.col-{breakpoint}-{size}` (1-12 scale), and `gap` / `g-{size}` gutters.
   - Leverage flexbox utilities (`d-flex`, `flex-column`, `justify-content-*`, `align-items-*`, `gap-*`).

3. **Color Modes & Dark Mode**:
   - Bootstrap 6 supports `data-bs-theme="dark"` / `data-bs-theme="light"` on `<html>`, `<body>`, or individual container elements.
   - Use theme-aware utility classes (e.g. `bg-body`, `text-body`, `bg-body-secondary`, `border-subtle`).

4. **Forms & Validation**:
   - Use `.form-control`, `.form-select`, `.form-check`, `.form-check-input`, `.form-label`, and `.form-text`.
   - For validation states, use `.is-valid` / `.is-invalid` with `.valid-feedback` / `.invalid-feedback`.

5. **Components**:
   - Use standard component markup: `.card`, `.modal`, `.alert`, `.dropdown`, `.nav`, `.navbar`, `.badge`, `.btn`, `.btn-primary`, `.btn-outline-*`, `.accordion`, `.list-group`.
   - Data attributes use `data-bs-*` prefixes (e.g., `data-bs-toggle="modal"`, `data-bs-target="#exampleModal"`).

## JavaScript Components API

Initialize components via the JS API when dynamic control is required:
```javascript
const modal = new bootstrap.Modal('#myModal', options);
modal.show();

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
```

## Migration & Breaking Changes from v5

- Ensure data attributes use the `data-bs-*` namespace.
- Verify updated CSS variable names and modern color token palettes.
- Do not mix legacy jQuery patterns; Bootstrap 6 uses pure modern ESM / vanilla JavaScript.
