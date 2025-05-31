Slimming down “op-core-8”
===

The onepiece-framework has always been designed with simplicity as its core principle.
Its code was easy to read, maintain, and use.

However, as new features were added, the op-core gradually became bloated.
To address this, we have completely overhauled op-core, streamlining it into a simpler and slimmer structure.

# 📜 History of op-core

 * **op-core-4 (2006)**
    The very first version, based on PHP4.
    It gained a good reputation for its simplicity and ease of use.
    However, it lacked sufficient functionality.
 * **op-core-5 (2010)**
    Rebuilt on PHP5 with significantly expanded features.
    As a result, the codebase became bloated and harder to maintain.
 * **op-core-7 (2017)**
    Updated for PHP7. Introduced a new architecture with the "skeleton" structure.
    Features were modularized into layout, unit, and module, leading to better organization.
 * **op-core-8 (in development)**
    The next-generation version being developed with 2030 in mind.
    It aims to become even simpler and more streamlined.

# 🔧 Specification Changes

- **Error Handler**  
  The error handler will be able to catch errors even when OP-CORE has not yet booted.  
  This is to handle cases such as failure to start a session due to insufficient storage space.

- **Session Auto-Start**  
  Sessions will start automatically, but the session name will not be changed.  
  If a conflict occurs on the web server, it can be avoided by using Memcached as the session storage.

- **Email Function**  
  The email function will be simplified to support only HTML format and will be usable independently of OP-CORE.  
  For advanced features like attachments, `op-unit-email` will be used.
