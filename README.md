## Template Pattern (OOP) - Remote Control Example

We are sharing some simple PHP code, showing the use of
the [Template Pattern](https://en.wikipedia.org/wiki/Template_method_pattern). You will see how modern
versions of PHP, supporting Classes and Abstract Classes, make it easy to implement the Template Pattern using this
language.

### About It

The Template pattern is a behavioral design pattern
in [object-oriented programming](https://en.wikipedia.org/wiki/Object-oriented_programming) that defines the skeleton of
an algorithm in a base class, allowing derived classes to provide specific implementations of certain steps of the
algorithm. It enables the common parts of an algorithm to be defined in a template method in the base class, while
allowing subclasses to customize or extend certain steps of the algorithm without changing its structure.

### History

The Template pattern, also known as the "Hollywood Principle" ("Don't call us, we'll call you"), has its roots in the
field of software engineering and design patterns. It was first introduced as one of the 23 design patterns in the
influential
book ["Design Patterns: Elements of Reusable Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns)
by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides, commonly known as the Gang of Four (GoF). Published in
1994, the book presented the Template pattern as a solution to common design problems in object-oriented programming.

However, the concept of defining a skeleton or a template for an algorithm that allows subclasses to provide specific
implementations predates the formalization of the Template pattern. The principles behind the pattern can be traced back
to earlier software engineering practices, such as modular design, abstraction, and inheritance.

The Template pattern draws inspiration from various software engineering and programming paradigms, including procedural
programming, where developers create generic functions or procedures with customizable parts, and object-oriented
programming, which promotes code reuse and modularity through inheritance and polymorphism.

### Intent

The intent of the Template pattern is to provide a reusable and customizable algorithm by defining a template method in
a base class. The template method encapsulates the overall algorithm and defines the structure, while specific steps are
left to be implemented by subclasses. The pattern promotes code reuse and eliminates duplication by extracting common
parts of an algorithm into a base class, while allowing variations in behavior by providing hooks for customization.

### Structure

- **Abstract Class:** Represents the base class that defines the template method and declares abstract or customizable
  methods or hooks that subclasses can implement.
- **Concrete Classes:** Inherit from the abstract class and provide specific implementations of the abstract or
  customizable methods. These classes customize or extend the behavior defined in the template method.

### How it Works

1. The Abstract Class defines the template method that encapsulates the overall algorithm and provides a default
   implementation for certain steps.
2. The template method in the Abstract Class calls various abstract or customizable methods, also known as hooks, at
   specific points within the algorithm.
3. Subclasses inherit from the Abstract Class and override the abstract or customizable methods, providing their own
   specific implementations.
4. When a client invokes the algorithm, it operates on an instance of the Concrete Class, which executes the template
   method.
5. The template method follows the structure defined in the Abstract Class but incorporates the specific behaviors
   implemented in the Concrete Class.

### Benefits

- Promotes code reuse by defining a common algorithm structure in a base class.
- Enables customization and extension of specific steps of the algorithm without modifying the overall structure.
- Provides a clear separation between the high-level algorithm and its specific implementations.
- Enhances maintainability by encapsulating common parts of the algorithm in a single place.
- Simplifies the addition of new variations of the algorithm by introducing new subclasses.
- Supports the "Open-Closed Principle" by allowing easy extension of behavior without modifying existing code.

### Applications

- **Algorithm Design:** The Template pattern is frequently used in algorithm design, where a base algorithm defines a
  general structure, and specific steps or computations are left to be implemented by subclasses. It allows different
  variations of the algorithm to be easily created by providing different implementations for the customizable steps.

- **Frameworks and Libraries:** Many software frameworks and libraries employ the Template pattern to provide extensible
  and customizable behavior. For example, web frameworks often define template methods that allow developers to override
  certain parts of the framework's default behavior to tailor it to their specific needs.

- **Report Generation:** Report generation systems can use the Template pattern to define a common structure for
  generating various types of reports. The base template provides the overall structure of the report, while subclasses
  can customize sections such as headers, footers, and content based on the specific report requirements.

- **User Interfaces:** User interface frameworks can leverage the Template pattern to define reusable components with a
  consistent structure but customizable content. For instance, a UI framework may provide a base template for a dialog
  box with predefined buttons and layout, while allowing developers to customize the dialog's title, message, and
  specific button actions.

- **Data Processing Pipelines:** Data processing pipelines often benefit from the Template pattern. The base template
  defines the overall pipeline structure, including stages like data ingestion, transformation, and output. Subclasses
  can provide custom implementations for specific stages, enabling flexibility and reuse in different data processing
  scenarios.

- **Test Automation:** The Template pattern can be applied in test automation frameworks to define a common test
  structure. The base template specifies the setup, execution, and teardown steps, while individual test cases provide
  their specific implementations of the test logic.

- **Game Development:** Game development frameworks can utilize the Template pattern to define common game structures
  and behaviors. The base template can provide the game loop, rendering pipeline, and input handling, while subclasses
  can implement game-specific features, such as character movement or enemy behavior.

- **Code Generation:** Code generation tools and frameworks can employ the Template pattern to generate code skeletons
  with customizable sections. Developers can provide specific implementations for the customizable parts, allowing the
  tool to generate customized code based on predefined templates.

- **Document Generation:** Document generation systems can utilize the Template pattern to define document structures
  and layouts. The base template provides a consistent document structure, while subclasses can customize content,
  styles, and formatting based on the specific document type.

- **Workflow Systems:** Workflow management systems often utilize the Template pattern to define reusable workflow
  templates. The base template outlines the overall workflow structure, including steps, conditions, and actions, while
  subclasses can provide specific implementations for individual steps or actions.

### Other Examples

In building construction, the Template pattern can be applied to the process of constructing different types of
buildings, such as houses, offices, or factories. The Abstract Class represents the base class called "Building" and
defines a template method called "constructBuilding." The template method outlines the general steps involved in
constructing a building, such as foundation laying, structure assembly, and finishing work. The Abstract Class also
provides customizable methods or hooks, such as "customizeInterior" and "installUtilities," which are left to be
implemented by subclasses. Concrete Classes like "House" and "Office" inherit from the Building class and provide their
own specific implementations for the abstract methods. For example, the House class may override the "customizeInterior"
method to include bedroom and living room configurations, while the Office class may override it to incorporate meeting
rooms and workstations. The template method in the Building class ensures a consistent construction process across
different types of buildings, while allowing subclasses to tailor specific aspects based on the building type. This
enables code reuse, reduces duplication, and provides flexibility in constructing various types of buildings.