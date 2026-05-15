# Architecture - ksf_Onboarding_UI

## Document Information
- **Module**: ksf_Onboarding_UI
- **Version**: 1.0.0
- **Date**: 2026-05-11
- **Status**: Implemented
- **Author**: KSFII Development Team

---

## 1. Module Overview

ksf_Onboarding_UI provides the WordPress ESS user interface for Onboarding functionality.

### 1.1 Namespace
`Ksfraser\OnboardingUI`

### 1.2 Adapter Pattern
```
ksf_Onboarding (Business Logic)
    ↓
ksf_Onboarding_UI (WordPress ESS Adapter)
    ↓
    WordPress ESS Portal
```

---

## 2. Component Architecture

### 2.1 Presenter Layer

| Presenter | Description |
|-----------|-------------|
| ListPresenter | List page logic |
| FormPresenter | Form handling |
| DetailPresenter | Detail view logic |

### 2.2 AJAX Handlers

| Endpoint | Action | Description |
|----------|--------|-------------|
| ksf_Onboarding_list | getList | Get items |
| ksf_Onboarding_save | saveItem | Save item |
| ksf_Onboarding_delete | deleteItem | Delete item |

---

## 3. Integration

### Consumed From
| Module | Interface |
|--------|-----------|
| ksf_Onboarding | Business logic |

### WordPress Integration
| Hook | Description |
|------|-------------|
| wp_ajax_ksf_Onboarding | AJAX handlers |
| ksf_Onboarding_template | Page templates |

---

*Document Version: 1.0.0*
*Last Updated: 2026-05-11*
