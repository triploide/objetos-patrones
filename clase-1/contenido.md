# Contenido

## Traits

Los traits son una estructura que permite agrupar funcionalidades que luego pueden ser reutilizadas en las clases.

Los traits por si mismo no pueden utilizarse de manera directa, es decir, no pueden crearse objetos a partir de un trait. Será una clase la que "incluya" el trait para valerse de su funcionalidad.

Se definen con la palabra reservada trait seguido del nombre.

Dentro del trait se puede hacer referencia de las palabras reservadas: $this, parent y self.

```php
trait FullAddress
{
    public function getAddress()
    {
        return $this->street . ' ' . $this->number . ' ' . $this->floor . ' ' . $this->apartment;
    }
}
```

Una clase puede valerse de más de un trait. Para hacerlo utiliza la palabra reservada use seguido de los triats separados por coma.

```php
class Product
{
    use SoftDeletes, Sluggable;

    //
}
```

## Interfaces

Las interfaces son un contrato el cual se compromete a cumplir el desarrollador de una clase y que permite a quien va a utilizarla tener la garantía que dicha clase va a contar un método determinado.

Amplian la interfaz de una clase sin la necesidad de usar la herencia.

Se definen usando la palabra reservada interface seguido del nombre de la misma. Dentro sólo se pueden declarar métodos sin cuerpo.

```php
interface Authenticatable
{
    public function login();
}
```

La clase que desee pude implementar la interfaz agregando en la declaración de la clase la palabra reservada implements seguida del nombre de la interfaz.

Una misma clase puede implementar más de una interfaz. Para eso lo debe hacer seperando por comas el nombre de cada interfaz a implementar.

```php
class User implements Authenticatable, Notificable
{
    //
}
```

