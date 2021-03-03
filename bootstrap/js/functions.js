mail = (form) => {
  let name =form.name.value;
  let email = form.email.value;
  let subject = form.subject.value;
  let message = form.subject.message;

  let str = `mailto:mrlamchensian@gmail.com?subject=${subject}&body=`
  str = str + String(name) + String(email) + String(subject)
}