package com.algaworks.cursojsf2.financeiro.view;

import java.io.IOException;
import java.util.Locale;

import javax.faces.bean.ManagedBean;
import javax.faces.context.ExternalContext;
import javax.faces.context.FacesContext;

@ManagedBean
public class InternacionalizacaoBean {

	private void alterarLocale(Locale locale) throws IOException {
		FacesContext facesContext = FacesContext.getCurrentInstance();
		ExternalContext externalContext = facesContext.getExternalContext();
			
		externalContext.getSessionMap().put("locale", locale);
		externalContext.redirect(externalContext.getRequestContextPath());
			
		facesContext.responseComplete();
	}
		
	public void alterarPortugues() throws IOException {
		this.alterarLocale(new Locale("pt", "br"));
	}

	public void alterarIngles() throws IOException {
		this.alterarLocale(Locale.US);
	}
}
